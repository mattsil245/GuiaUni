<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesteVocacional extends Model
{
    use HasFactory;

    protected $table = 'teste_vocacional';

    protected $fillable = [
        'data_inicio',
        'data_fim',
        'usuario_id',
    ];

    protected $dates = [
        'data_inicio',
        'data_fim',
        'created_at',
        'updated_at',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
