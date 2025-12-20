<?php

namespace App\Modules\Categories\Repositories;

interface CategoryRepositoryInterface
{
    public function all();
    public function find($id);
    public function create();
    public function show(array $data);
    public function update($id, array $data);
    public function delete($id);
}
