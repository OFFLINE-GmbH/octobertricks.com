<?php

namespace OFFLINE\Tricks\Classes;


use Illuminate\Support\Carbon;
use October\Rain\Exception\ValidationException;
use OFFLINE\Tricks\Models\Comment;
use OFFLINE\Tricks\Models\Trick;
use DB;
use RainLab\User\Facades\Auth;

class Voter
{
    const SUBJECT_TRICK = 'trick';
    const SUBJECT_COMMENT = 'comment';

    protected $model;
    protected $modelTable;
    protected $voteTable;
    protected $userVote;
    protected $ipHash;
    protected $relationColumn;

    public function __construct(string $subject, $userVote)
    {
        $this->userVote = $userVote;
        $this->ipHash   = hash('sha256', request()->ip());
        if ($subject === self::SUBJECT_TRICK) {
            $this->model          = new Trick();
            $this->voteTable      = 'offline_tricks_trick_vote';
            $this->modelTable     = 'offline_tricks_tricks';
            $this->relationColumn = 'trick_id';
        } else {
            $this->model          = new Comment();
            $this->voteTable      = 'offline_tricks_comment_vote';
            $this->modelTable     = 'offline_tricks_comments';
            $this->relationColumn = 'comment_id';
        }
    }

    public function handle($isUp, $id)
    {
        return DB::transaction(function () use ($isUp, $id) {

            if ( ! $this->model->where('id', $id)->exists()) {
                throw new ValidationException(['trick' => sprintf('The trick with id %d does not exist', $id)]);
            }

            $this->guardRateLimit();

            $value = $isUp ? 1 : -1;


            // The user voted already, delete the vote
            if ($this->userVote) {
                // The user voted up or down twice, simply negate the vote
                DB::table($this->voteTable)->where('id', $this->userVote->id)->delete();
                if ($this->userVote->value === 1 && $isUp) {
                    DB::table($this->modelTable)->where('id', $id)->decrement('votes_up', 1);
                    DB::table($this->modelTable)->where('id', $id)->decrement('votes', 1);

                    return;
                } elseif ($this->userVote->value === -1 && ! $isUp) {
                    DB::table($this->modelTable)->where('id', $id)->decrement('votes_down', 1);
                    DB::table($this->modelTable)->where('id', $id)->increment('votes', 1);

                    return;
                } else {
                    // The user switched from "up to down vote" or "down to up vote" directly.
                    // Reverse the previous vote then fall through to the normal voting
                    // logic below.
                    $column = $this->userVote->value === 1 ? 'votes_up' : 'votes_down';
                    $method = $this->userVote->value === 1 ? 'decrement' : 'increment';
                    DB::table($this->modelTable)->where('id', $id)->decrement($column, 1);
                    DB::table($this->modelTable)->where('id', $id)->$method('votes', 1);
                }
            }

            // Register a new vote
            DB::table($this->voteTable)->insert([
                $this->relationColumn => $id,
                'user_id'             => optional(Auth::getUser())->id,
                'value'               => $value,
                'ip_hash'             => $this->ipHash,
                'created_at'          => now(),
            ]);

            return $this->updateTrickVotes($isUp, $id, $value, 'increment');
        });
    }

    protected function updateTrickVotes(bool $isUp, int $id, int $value, string $method)
    {
        $column = $isUp ? 'votes_up' : 'votes_down';
        DB::table($this->modelTable)->where('id', $id)->$method('votes', $value);
        DB::table($this->modelTable)->where('id', $id)->$method($column, 1);
    }

    protected function guardRateLimit()
    {
        $votesCount120Sec = DB::table($this->voteTable)
                              ->where('created_at', '>=', Carbon::now()->subSeconds(120))
                              ->where('ip_hash', $this->ipHash)
                              ->count();

        $votesCount30Sec = DB::table($this->voteTable)
                             ->where('created_at', '>=', Carbon::now()->subSeconds(30))
                             ->where('ip_hash', $this->ipHash)
                             ->count();

        if ($votesCount120Sec >= 10 || $votesCount30Sec >= 3) {
            throw new ValidationException([
                'voter' => 'You are voting too much! Slow down!',
            ]);
        }
    }
}