@extends('layouts.login')

@section('content')
<div class="container">
    
    <div class="col-5" style="background:white; border-top-left-radius: 22px;">
        
        <div class="col-12 justify-content-center">
            
            <div class="titulo-login">
                <h1> LOGIN ESCOLAS </h1>
            </div>

            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" style="padding-bottom: 1rem;">
                @csrf

                <div class="form-wrapper">
                    <label for="email" style="" class="w-100 label-login"> {{ __('usuário') }} </label>
                    <input id="email" type="email" style="border: 1px solid #b9242a;" class="w-100" name="email" value="{{ old('email') }}" autofocus>
                </div>
                
                <div class="form-wrapper">
                    <label for="password" class="w-100 label-login"> {{ __('senha') }}</label>
                    <input id="password" style="border: 1px solid #b9242a;" type="password" class="w-100" name="password">
                </div>
            
                <button type="submit" class="btn-login" style="margin-top:2rem;">
                    {{ __('entrar') }}
                </button>
            </form>
        
        </div>
    
    </div>

    <section class="login-mkt">
        <button> LOGIN EQUIPE MKT NTB </button>
    </section>
    
</div>
@endsection