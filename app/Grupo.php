<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'materia_id', 'profesor_id', 'salon', 'clave',  
    ];
}
