<?php

namespace App\Repositories;

use App\Models\Equipe;
use App\Constants;

class EquipeRepository
{
    private $equipeModel;

    public function __construct()
    {
        $this->equipeModel = new Equipe;
    }

    public function getAll()
    {
        return $this->equipeModel::where('deleted', '<>', Constants::DELETED)->get();
    }

    public function save($equipe)
    {
        return $this->equipeModel->create($equipe);
    }

    public function delete($idEquipe)
    {
        return $this->equipeModel->where('id_equipe', $idEquipe)->update(['deleted' => Constants::DELETED]);
    }
}