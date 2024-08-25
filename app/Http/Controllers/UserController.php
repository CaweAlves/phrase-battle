<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(protected UserRepositoryInterface $userRepository)
    {
    }

    public function search(Request $request)
    {
        $username = $request->input('username');

        return $this->userRepository->findByUsername($username);
    }
}
