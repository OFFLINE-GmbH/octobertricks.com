<?php declare(strict_types=1);

namespace OFFLINE\Tricks\Models;

use DB;
use RainLab\User\Models\User;

class Proposal extends Trick
{
    const STATUS_PENDING = 0;
    const STATUS_ACCEPTED = 1;
    const STATUS_DECLINED = 2;

    /**
     * The table associated with this model.
     * @var string
     */
    public $table = 'offline_tricks_proposals';

    /**
     * The attributes that should be cast as dates.
     * @var array
     */
    public $dates = [];

    /**
     * The belongsTo relationships of this model.
     * @var array
     */
    public $belongsTo = [
        'author' => [User::class, 'key' => 'user_id'],
        'trick'  => Trick::class,
    ];

    /**
     * The belongsToMany relationships of this model.
     * @var array
     */
    public $belongsToMany = [
        'topics' => [Topic::class, 'table' => 'offline_tricks_proposal_topic'],
        'tags'   => [Tag::class, 'table' => 'offline_tricks_proposal_tag'],
    ];
    
    /**
     * Hook before model is created.
     * @return void
     */
    public function beforeCreate()
    {
        $this->status = self::STATUS_PENDING;
    }

    /**
     * Hook before model is saved.
     * @return void
     */
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

    /**
     * Get available status options.
     * @return array
     */
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
