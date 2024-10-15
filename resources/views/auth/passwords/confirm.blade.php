@extends('layouts.app')

@section('content')
<div class="container bg-abracar reset">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 

                <div class="card-body"> 

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center flex-column align-items-center">
                                <img src="{{ asset('images/logo_abracar.png') }}" alt="logo" class="img-fluid w-50">
                                <h4 class="text-center mb-2">
                                    Confirme sua senha
                                </h4>
                                <p class="text-center">
                                    Por favor, confirme sua senha antes de continuar.
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <label for="password">{{ __('Senha') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-50">
                                    <i class="fas fa-key"></i>
                                    {{ __('Confirmar Senha') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
