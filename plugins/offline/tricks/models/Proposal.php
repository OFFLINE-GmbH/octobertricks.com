<?php namespace OFFLINE\Tricks\Models;

use DB;
use RainLab\User\Models\User;
use Str;


class Proposal extends Trick
{
    const STATUS_PENDING = 0;
    const STATUS_ACCEPTED = 1;
    const STATUS_DECLINED = 2;

    public $table = 'offline_tricks_proposals';
    public $dates = [];
    public $belongsTo = [
        'author' => [User::class, 'key' => 'user_id'],
        'trick'  => Trick::class,
    ];
    public $belongsToMany = [
        'topics' => [Topic::class, 'table' => 'offline_tricks_proposal_topic'],
        'tags'   => [Tag::class, 'table' => 'offline_tricks_proposal_tag'],
    ];

    public function beforeCreate()
    {
        $this->status = self::STATUS_PENDING;
    }

    public function beforeSave()
    {
        if ($this->wasAccepted()) {
            DB::transaction(function () {
                $this->trick->title   = $this->title;
                $this->trick->content = $this->content;
                $this->trick->save();

                $this->trick->topics()->sync($this->topics->pluck('id'));
                $this->trick->tags()->sync($this->tags->pluck('id'));
            });
        }
    }

    public function getStatusOptions()
    {
        return [
            self::STATUS_PENDING  => 'Undecided',
            self::STATUS_ACCEPTED => 'Accepted',
            self::STATUS_DECLINED => 'Declined',
        ];
    }

    /**
     * @return bool
     */
    protected function wasAccepted(): bool
    {
        return $this->getOriginal('status') === self::STATUS_PENDING
            && (int)$this->status === self::STATUS_ACCEPTED;
    }
}
