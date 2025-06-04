<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloSobre extends Model
{
    use HasFactory;

    protected $table = 'modelo_sobre';

    protected $fillable = [
        'titulo',
        'modelo',
    ];
}
