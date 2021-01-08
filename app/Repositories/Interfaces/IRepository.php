<?php

namespace App\Repositories\Interfaces;

interface IRepository
{
    public function get(int $id);
    
    public function getAll();

    public function save(array $data);

    public function delete(int $id);
}