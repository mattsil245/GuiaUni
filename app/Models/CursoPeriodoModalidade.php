<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoPeriodoModalidade extends Model
{
    use HasFactory;

    protected $table = 'curso_periodo_modalidade';

    protected $fillable = [
        'mensalidade',
        'curso_id',
        'modalidade_id',
        'periodo_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function modalidade()
    {
        return $this->belongsTo(Modalidade::class, 'modalidade_id');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'periodo_id');
    }
}
