<?php

namespace App\Repository\Eloquent;

interface FriendshipRepositoryInterface
{
    public function send(int $userId, int $friendId);
    public function accept();
    public function reject();
}
