<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = 'partidas';

    protected $primaryKey = 'id_partida';

    public $timestamps = false;

    protected $fillable = ['mandante', 'visitante', 'pontos_mandante', 'pontos_visitante', 'data', 'horario', 'local', 'endereco', 'numero', 'status'];

    protected $hidden = ['deleted'];

}
