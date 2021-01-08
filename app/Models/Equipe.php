<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Partida;

class Equipe extends Model
{
    protected $table = 'equipes';

    protected $primaryKey = 'id_equipe';

    public $timestamps = false;

    protected $fillable = ['nome', 'abreviacao', 'cidade', 'estado', 'contato', 'telefone'];

    protected $hidden = ['deleted'];
}
