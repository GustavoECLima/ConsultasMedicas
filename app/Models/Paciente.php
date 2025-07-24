<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';

    protected $fillable = [
    'nomepaciente',
    'senhapaciente',
    'emailpaciente',
    'telefonepaciente',
    'datanascimentopaciente',
    'cpfpaciente',
    'ceppaciente',
    'bairropaciente',
    ];

    public $timestamps = false;
}
