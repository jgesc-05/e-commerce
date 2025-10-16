@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-dark">
    <div class="card bg-black text-light p-4 shadow-lg" style="width: 450px; border-radius: 15px;">
        <h3 class="text-center mb-4">Verifica tu correo electrónico</h3>

        <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success text-center fw-bold" role="alert">
                    Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
                </div>
            @endif

            <p class="mb-3 text-center">
                Antes de continuar, revisa tu correo electrónico y haz clic en el enlace de verificación.
            </p>

            <p class="text-center mb-4">
                Si no recibiste el correo,
            </p>

            <form class="text-center" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn fw-bold" 
                        style="background-color: #FFD700; color: black;">
                    Reenviar enlace de verificación
                </button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('logout') }}" class="text-warning text-decoration-none"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

