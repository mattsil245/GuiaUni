<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected $fillable = [
        'email',
        'senha',
        'nome',
        'data_nasc',
        'endereco_id',
    ];

    // Definindo relacionamento com EnderecoUsuario
    public function endereco()
    {
        return $this->belongsTo(EnderecoUsuario::class, 'endereco_id');
    }

    public function favoritos()
    {
        return $this->hasMany(Favorito::class, 'usuario_id');
    }

    // Relacionamento: cursos favoritos do usuário (muitos para muitos via tabela favorito)
    public function cursosFavoritos()
    {
        return $this->belongsToMany(Curso::class, 'favorito', 'usuario_id', 'curso_id')->withTimestamps();
    }
}
