<?php

namespace App\Repository\Eloquent;

use App\Repository\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{
    public function __construct(protected Model $model)
    {
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function findAll()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        return  $this->find($id)->update($data);
    }

    public function delete(int $id)
    {
        return $this->find($id)->delete($id);
    }
}
