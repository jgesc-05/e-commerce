@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-dark">
    <div class="card bg-black text-light p-4 shadow-lg" style="width: 400px; border-radius: 15px;">
        <h3 class="text-center mb-4">Iniciar sesión</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Correo electrónico --}}
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Correo electrónico</label>
                <input id="email" type="email" 
                       class="form-control bg-secondary border-0 text-light @error('email') is-invalid @enderror" 
                       name="email" value="{{ old('email') }}" required autofocus 
                       placeholder="Ingresa tu correo">
                @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Contraseña --}}
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Contraseña</label>
                <input id="password" type="password" 
                       class="form-control bg-secondary border-0 text-light @error('password') is-invalid @enderror" 
                       name="password" required 
                       placeholder="Ingresa tu contraseña">
                @error('password')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Recordarme --}}
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                       {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label text-light" for="remember">
                    Mantener sesión activa
                </label>
            </div>

            {{-- Botón --}}
            <button type="submit" class="btn w-100 py-2 fw-bold" 
                    style="background-color: #FFD700; color: black;">
                Iniciar sesión
            </button>

            {{-- Enlaces --}}
            <div class="text-center mt-3">
                @if (Route::has('password.request'))
                    <a class="text-warning text-decoration-none d-block" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif

                <a href="{{ route('register') }}" class="text-warning text-decoration-none">
                    Crear una cuenta
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
