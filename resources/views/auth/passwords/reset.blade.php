@extends('layouts.app')

@section('content')
<div class="container bg-abracar reset">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 

                <div class="card-body justify-content-center pt-5 pb-5">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center flex-column align-items-center">
                                <img src="{{ asset('images/logo_abracar.png') }}" alt="logo" class="img-fluid w-50">
                                <h4 class="text-center mb-4">
                                    Redefinir Senha
                                </h4>
                            </div>
                        </div>

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <label for="email">{{ __('E-mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <label for="password">{{ __('Senha') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <label for="password-confirm">{{ __('Confirmar Senha') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-50">
                                    <i class="fas fa-key"></i>
                                    {{ __('Redefinir Senha') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
