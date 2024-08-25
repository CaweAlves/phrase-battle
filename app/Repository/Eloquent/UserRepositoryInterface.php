<?php

namespace App\Repository\Eloquent;

use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function findByUsername(string $username): Collection;
}
