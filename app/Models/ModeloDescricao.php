<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloDescricao extends Model
{
    use HasFactory;

    protected $table = 'modelo_descricao';

    protected $fillable = [
        'titulo',
        'modelo',
    ];
}
