@extends('layouts.app')
    
    @section('content')
    <div class="row">
        
        <div class="col-12" style="margin-top:1rem;">
            <painel-adiciona-banner></painel-adiciona-banner>
        </div>

        <div class="col-12" style="margin-top:1rem;">
            <painel-adicionar-user></painel-adicionar-user>
        </div>
        
        <div class="col-12" style="margin-top:1rem;">
            <painel-adicionar-evento></painel-adicionar-evento>
        </div>
        
    </div>
    @endsection