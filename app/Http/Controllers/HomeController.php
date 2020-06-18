<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcion;
use App\Grupo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function materias(Request $request) {
        $name = $request->input('clave');
        $materias = auth()->user()->carrera->materias;
        $permitir = $this->permitirInscripcion($materias, $name);

        if($permitir) {

            $clave = Grupo::where('clave', '=', $name)->first();

            $inscripcion = new Inscripcion();
            $inscripcion->user_id = auth()->id();
            $inscripcion->grupo_id = $clave->grupo_id;
            $inscripcion->save();

            return redirect()->back('messageSuccess', 'Materia inscrita');
        }

        return redirect()->back()->with('messageError', 'No pueden inscribir esta materia');

    }

    protected function permitirInscripcion($materias, $name){
        foreach($materias as $materia) {
            foreach($materia->grupos as $grupo) {
                if($grupo->clave == $name)
                    return true;
                }
        }
        return false;
    }
}
