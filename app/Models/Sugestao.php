<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sugestao extends Model
{
    use HasFactory;

    protected $table = 'sugestao';

    protected $fillable = [
        'categoria',
        'descricao',
        'instituicao_id',
    ];

    // Define os valores possíveis para categoria (pode ser útil para validação)
    public const CATEGORIAS = ['Periodo', 'Modalidade', 'Curso'];

    // Relacionamento com instituição
    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class, 'instituicao_id');
    }
}
