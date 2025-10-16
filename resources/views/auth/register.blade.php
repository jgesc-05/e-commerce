@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-dark">
    <div class="card bg-black text-light p-4 shadow-lg" style="width: 400px; border-radius: 15px;">
        <h3 class="text-center mb-4">Crear cuenta</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Nombre --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nombre</label>
                <input id="name" type="text" 
                       class="form-control bg-secondary border-0 text-light @error('name') is-invalid @enderror" 
                       name="name" value="{{ old('name') }}" required autofocus 
                       placeholder="Ingresa tu nombre">
                @error('name')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Correo electrónico --}}
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Correo electrónico</label>
                <input id="email" type="email" 
                       class="form-control bg-secondary border-0 text-light @error('email') is-invalid @enderror" 
                       name="email" value="{{ old('email') }}" required 
                       placeholder="Ingresa tu correo electrónico">
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
                       placeholder="Crea una contraseña">
                @error('password')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Confirmar contraseña --}}
            <div class="mb-3">
                <label for="password-confirm" class="form-label fw-bold">Confirmar contraseña</label>
                <input id="password-confirm" type="password" 
                       class="form-control bg-secondary border-0 text-light" 
                       name="password_confirmation" required 
                       placeholder="Repite la contraseña">
            </div>

            {{-- Botón --}}
            <button type="submit" class="btn w-100 py-2 fw-bold" 
                    style="background-color: #FFD700; color: black;">
                Crear cuenta
            </button>

            {{-- Enlace al login --}}
            <div class="text-center mt-3">
                <a href="{{ route('login') }}" class="text-warning text-decoration-none">
                    ¿Ya tienes una cuenta? Inicia sesión
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
