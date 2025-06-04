<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    protected $table = 'unidade';

    protected $fillable = [
        'nome',
        'logradouro',
        'numero',
        'cidade',
        'estado',
        'cep',
        'tipo',
        'latitude',
        'longitude',
        'instituicao_id',
    ];

    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class, 'instituicao_id');
    }
}
