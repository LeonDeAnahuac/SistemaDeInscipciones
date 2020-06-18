<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Materia;

class CarreraController extends Controller {
    public function index() {
        
        $carreras = Carrera::all();
        return view('carreras')->with(['carreras' => $carreras]);
    }

    public function show($id) {
        $materias = Carrera::findOrFail($id)->materias;
        return view('horarios')->with(['materias' => $materias]);
    }
}
