<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\FriendshipRepositoryInterface;
use Illuminate\Http\Request;

class FriendshipController extends Controller
{
    public function __construct(protected FriendshipRepositoryInterface $friendshipRepository)
    {
    }

    public function send(Request $request, int $userID, int $friendId)
    {
        $this->friendshipRepository->send($userID, $friendId);

        return response(status: 201);
    }
}
