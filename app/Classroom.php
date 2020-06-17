<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    // Fillable: campi scrivibili o modificabili
    protected $fillable = [
        'name',
        'description',
    ];
}
