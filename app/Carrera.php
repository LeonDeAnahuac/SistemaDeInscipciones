<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $primaryKey = 'carrera_id';

    protected $fillable = [
        'nombre',
    ];
    protected $hidden = [
        'created_at', 'updated_at', 
    ];

    public function users() {
        return $this->hasMany('App\User', 'carrera_id');
    }

    public function materias() {
        return $this->hasMany('App\Materia', 'carrera_id');
    }

}
