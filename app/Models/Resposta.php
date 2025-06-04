<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    public function testeVocacional()
    {
        return $this->belongsTo(TesteVocacional::class, 'teste_vocacional_id');
    }

    public function pergunta()
    {
        return $this->belongsTo(Pergunta::class, 'pergunta_id');
    }

    public function alternativa()
    {
        return $this->belongsTo(Alternativa::class, 'alternativa_id');
    }
}
