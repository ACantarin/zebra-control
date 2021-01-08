<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Partida;

class Arbitro extends Model
{
    protected $table = 'arbitros';

    protected $primaryKey = 'id_arbitro';

    public $timestamps = false;

    protected $fillable = [
        'registro', 'nome', 'sobrenome', 'apelido', 'cpf', 'endereco', 'numero', 'complemento', 'cep', 'celular', 'tel_fixo', 'email',
        'referee', 'umpire', 'line_judge', 'head_linesman', 'side_judge', 'field_judge', 'back_judge', 'delegate', 'deleted'
    ];

    protected $hidden = ['deleted'];
}