<?php

namespace App\Repository\Eloquent;

use App\FriendshipStatus;
use App\Models\Friendship;

class FriendshipRepository extends BaseRepository implements FriendshipRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new Friendship());
    }

    public function send(int $userId, $friendId)
    {
        return $this->create([
            'requester_id' => $userId,
            'recipient_id' => $friendId,
            'status'       => FriendshipStatus::Pending,
        ]);
    }

    public function accept()
    {
        //
    }

    public function reject()
    {
        //
    }
}
