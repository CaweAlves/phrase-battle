<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new User());
    }

    public function findByUsername(string $username): Collection
    {
        return $this->model->where('name', 'like', "%$username%")->get();
    }
}
