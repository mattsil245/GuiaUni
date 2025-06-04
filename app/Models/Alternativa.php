<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    protected $table = 'alternativa';

    protected $fillable = [
        'texto', 'pergunta_id', 'perfil_id',
    ];

    public function pergunta()
    {
        return $this->belongsTo(Pergunta::class);
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }
}
