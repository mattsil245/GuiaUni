<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoPerfil extends Model
{
    protected $table = 'curso_perfil';

    protected $fillable = ['nome_curso_id', 'perfil_id'];

    public function nomeCursos()
    {
        return $this->belongsToMany(NomeCurso::class, 'curso_perfil', 'perfil_id', 'nome_curso_id')
                    ->withTimestamps();
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }
}