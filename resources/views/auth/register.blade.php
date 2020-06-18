@extends('layouts.app')

@section('content')
    <h1>Registrarse</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <p>
        <label for="name">Nombre</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
        </span>
        @enderror
        </p>
        
        <p>
        <label for="email" >Correo</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </p>

        <p>
        <label for="password">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </p>

        <p>
        <label for="password-confirm" >Confirmar Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
        </p>

        <p>
        <p>Tu carrera:</p>
        <label for="filosofia">Filosofia</label>
        <input id="filosofia" type="radio" name="carrera_id" value="1">
        <label for="historia">Historia</label>
        <input id="historia" type="radio" name="carrera_id" value="2">
        <label for="letras_clasicas">Letras clasicas</label>
        <input id="letras_clasicas" type="radio" name="carrera_id" value="3">
        </p>

        
        <button type="submit" class="btn btn-registrarse">
            Registrarse
        </button>
         
    </form>

@endsection
