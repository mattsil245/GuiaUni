<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;

    protected $table = 'instituicao';

    protected $fillable = [
        'nome',
        'razao_social',
        'cnpj',
        'logo_url',
        'site',
        'telefone',
        'status',
        'email',
        'senha',
        'slug',
        'nota_mec',
        'tamanho',
        'ano_fundacao',
        'alunos_matriculados',
        'docentes',
        'video_url',
        'modelo_descricao_id',
        'modelo_sobre_id',
        'tipo_instituicao_id',
    ];

    // Relacionamentos

    public function modeloDescricao()
    {
        return $this->belongsTo(ModeloDescricao::class, 'modelo_descricao_id');
    }

    public function modeloSobre()
    {
        return $this->belongsTo(ModeloSobre::class, 'modelo_sobre_id');
    }

    public function tipoInstituicao()
    {
        return $this->belongsTo(TipoInstituicao::class, 'tipo_instituicao_id');
    }

    public function unidades()
    {
        return $this->hasMany(Unidade::class, 'instituicao_id');
    }

    public function imagens()
    {
        return $this->hasMany(ImagemInstituicao::class, 'instituicao_id');
    }
}
