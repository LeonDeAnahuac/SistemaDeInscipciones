<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    protected $fillable = [
        'nombre', 'carrera_id', 
    ];

    public function carrera() {
        return $this->belongsTo('App\Carrera', 'carrera_id');
    }

    public function profesors() {
        return $this->belongsToMany('App\Profesor', 'grupos')->withPivot('salon', 'clave');
    }

    public function grupos() {
        return $this->hasMany('App\Grupo');
    }
}
