<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorando extends Model
{
    use HasFactory;

    protected $table = 'memorandos';

    protected $fillable = [
        'numero_memorando',
        'setor_origem',
        'remetente',
        'setor_destino',
        'destinatario',
        'assunto',
        'texto',
        'criado_por',
    ];

}