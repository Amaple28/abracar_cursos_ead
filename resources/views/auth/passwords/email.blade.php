@extends('layouts.app')

@section('content')
<div class="container bg-abracar reset">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Reset Password') }}</div> --}}

                <div class="card-body justify-content-center pt-2 pb-2">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center flex-column align-items-center">
                                <img src="{{ asset('images/logo_abracar.png') }}" alt="logo" class="img-fluid w-50">
                                <h4 class="text-center mb-2">
                                    Esqueceu sua senha?
                                </h4>
                                <p class="text-center">
                                    Não se preocupe! Informe seu e-mail e enviaremos um link para redefinir sua senha.
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <label for="email">{{ __('E-mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-50">
                                    <i class="fas fa-paper-plane"></i>
                                    {{ __('Enviar Link de Redefinição de Senha') }}
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
