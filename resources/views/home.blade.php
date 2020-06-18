@extends('layouts.app')

@section('content')
    <h1>Inscripciones</h1>
    {{ auth()->user()->carrera->materias }}
    <form method="POST" action={{ route('homepost') }}>
        @csrf
        <p>
        <label for="materia"></label>    
        <input type="text" name="clave" id="materia">
        </p>
        <p><input type="submit" value="Inscribir"></p>
        
    </form> 
    
    @if(session()->has('messageSuccess'))
        <p>{{ session()->get('messageSuccess') }}</p>
    @endif

    @if(session()->has('messageError'))
        <p>{{ session()->get('messageError') }}</p>
    @endif
    <!--            
        @if (session('status'))
          <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        You are logged in!
        */
        -->        
@endsection
