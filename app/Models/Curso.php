<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'curso';

    protected $fillable = [
        'grau',
        'descricao',
        'imagem',
        'slug',
        'instituicao_id',
        'nome_curso_id',
    ];

    // Relacionamento com Instituicao
    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class, 'instituicao_id');
    }

    // Relacionamento com NomeCurso
    public function nomeCurso()
    {
        return $this->belongsTo(NomeCurso::class, 'nome_curso_id');
    }

    public function usuariosFavoritaram()
    {
        return $this->belongsToMany(Usuario::class, 'favorito', 'curso_id', 'usuario_id')->withTimestamps();
    }
}
