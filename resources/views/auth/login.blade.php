@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style='border-radius: 1.5rem;'>
                <div style="padding-top: 8%;">  
                    <img src="{{asset('logo.png')}}"  style='width:200px;height:200px' class="rounded mx-auto d-block">
                    <h5 class="text-center" style="padding-top: 8%;"><strong>INICIAR SESIÓN</strong></h5>
                </div>

                <div class="card-body" style="padding-bottom: 8%;">
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('USUARIO:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="texto" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="off" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('CONTRASEÑA:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background: #FCBA03;border:1px solid #FCBA03;width:72%">
                                    {{ __('INGRESAR') }}
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
