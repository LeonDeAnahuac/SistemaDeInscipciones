@extends('layouts.app')

@section('content')

    <h1>Iniciar Inscripcion</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <p>
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </p>
        <p>
        <label for="password">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </p>
        <p>
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            Recordarme
        </label>
        </p>
        <p>
        <button type="submit" class="btn btn-inscribirse">
            Iniciar
        </button>
        </p>
        @if (Route::has('password.request'))
                <a class="btn btn-olvidado" href="{{ route('password.request') }}">
                    Olvide password
                </a>
        @endif
    </form>
@endsection
