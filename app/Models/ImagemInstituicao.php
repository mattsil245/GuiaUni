<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagemInstituicao extends Model
{
    use HasFactory;

    protected $table = 'imagem_instituicao';

    protected $fillable = [
        'link_imagem',
        'instituicao_id',
    ];

    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class, 'instituicao_id');
    }
}
