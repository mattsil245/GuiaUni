<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoInstituicao extends Model
{
    use HasFactory;

    protected $table = 'tipo_instituicao';

    protected $fillable = [
        'tipo',
    ];
}
