<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'nome_mae',
        'data_nascimento',
        'cpf',
        'cns',
        'foto',
        'endereco_id',
        'created_at',
        'updated_at'
    ];
}
