<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaLegado extends Model
{
    use HasFactory;

    protected $table = 'sistemas_legados';
    protected $fillable = [
        'nome',
        'descricao',
        'linguagem',
        'status'
    ];
}
