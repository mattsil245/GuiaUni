<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomeCurso extends Model
{
    use HasFactory;

    protected $table = 'nome_curso';

    protected $fillable = [
        'nome',
    ];

    public function perfis()
    {
        return $this->belongsToMany(Perfil::class, 'curso_perfil', 'nome_curso_id', 'perfil_id')
                    ->withTimestamps();
    }
}
