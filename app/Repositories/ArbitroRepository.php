<?php

namespace App\Repositories;

use App\Models\Arbitro;
use App\Constants;
use App\Repositories\Interfaces\IRepository;

class ArbitroRepository implements IRepository
{
    private $arbitroModel;

    public function __construct()
    {
        $this->arbitroModel = new Arbitro;
    }

    public function get($idArbitro)
    {
        return $this->arbitroModel::where('id_arbitro', $idArbitro)->get();
    }

    public function getAll()
    {
        return $this->arbitroModel::where('deleted', '<>', Constants::DELETED)->get();
    }

    public function save($arbitro)
    {
        return $this->arbitroModel->create($arbitro);
    }

    public function delete($idArbitro)
    {
        return $this->arbitroModel->where('id_arbitro', $idArbitro)->update(['deleted' => Constants::DELETED]);
    }
}