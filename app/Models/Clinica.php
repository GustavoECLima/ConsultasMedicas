<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $table = 'clinicas';

    protected $fillable = [
    'nomedaclinica',
    'cepclinica',
    ];

    public $timestamps = false;

}

