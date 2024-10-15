@extends('layouts.app')

@section('content')
<div class="container bg-abracar login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 

                <div class="card-body  justify-content-center pt-5 pb-5"> 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center"> 
                            <div class="col-md-6 d-flex justify-content-center flex-column align-items-center">
                                <img src="{{ asset('images/logo_abracar.png') }}" alt="logo" class="img-fluid w-50">
                                <h4 class="text-center mb-4">
                                    Seja bem-vindo!
                                </h4>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center"> 
                            <div class="col-md-8">
                                <label for="email">{{ __('E-mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center"> 
                            <div class="col-md-8">
                                <label for="password">{{ __('Senha') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                                <small id="passwordHelpBlock" class="form-text text-muted info-details">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar de mim') }}
                                        </label>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Esqueceu sua senha?') }}
                                        </a>
                                    @endif
                                </small>
                            </div>
                        </div> 
                        
                        <div class="row mb-2">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-50">
                                    <i class="fas fa-sign-in-alt"></i>
                                    {{ __('Login') }}
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
