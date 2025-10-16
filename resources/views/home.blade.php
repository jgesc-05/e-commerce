@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-dark">
    <div class="card bg-black text-light p-4 shadow-lg text-center" style="width: 450px; border-radius: 15px;">
        <h3 class="mb-4">{{ __('Dashboard') }}</h3>

        @if (session('status'))
            <div class="alert alert-success fw-bold" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <p class="fs-5">{{ __('You are logged in!') }}</p>

        <div class="mt-4">
            <a href="{{ route('logout') }}" class="btn fw-bold" 
               style="background-color: #FFD700; color: black;"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection

