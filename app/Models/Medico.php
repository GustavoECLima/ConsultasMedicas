<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medico';

    protected $fillable = [
    'nomemedico',
    'senhamedico',
    'especializacaomedico',
    ];

    public $timestamps = false;
}