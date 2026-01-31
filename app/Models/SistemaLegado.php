<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SistemaLegado extends Model
{
    protected $table = 'sistemas_legados';

    protected $fillable = [
        'nome',
        'descricao',
        'linguagem',
        'status'
    ];
}
