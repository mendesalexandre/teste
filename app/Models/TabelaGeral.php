<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelaGeral extends Model
{
    use HasFactory;
    protected $casts = [
        'has_fundo_jucidiciario' => 'boolean',
        'has_registro_civil' => 'boolean',
        'is_ato_correlacionado' => 'boolean',
        'judiciario' => 'boolean',
        'associacoes' => 'boolean',
        'ato_correlacionado' => 'boolean'
    ];

    protected $table = 'tabela_geral';
}
