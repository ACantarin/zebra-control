<?php

namespace App\Repositories;

use App\Models\Partida;
use App\Constants;

class PartidaRepository
{
    private $partidaModel;

    public function __construct()
    {
        $this->partidaModel = new Partida;
    }

    public function getAll()
    {
        return $this->partidaModel::where('deleted', '<>', Constants::DELETED)->get();
    }

    public function save($partida)
    {
        return $this->partidaModel->create($partida);
    }

    public function delete($idPartida)
    {
        return $this->partidaModel->where('id_partida', $idPartida)->update(['deleted' => '1']);
    }
}