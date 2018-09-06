@extends('layouts.app')
    
    @section('content')
    <div class="row">
        <div style="width:100%">
            <tabs>
                
                <tab class="evento" name="Evento">
                    <div class="container">
                        <painel-adicionar-evento></painel-adicionar-evento>
                    </div>
                </tab>
                
                <tab name="Banner">
                    <painel-adiciona-banner></painel-adiciona-banner>
                </tab>
                
                <tab name="Usuario">
                    Third tab content
                </tab>

                <tab name="Destaque">
                    <painel-destaque></painel-destaque>
                </tab>
            </tabs>
        </div>
<!--         
        <div class="col-12" style="margin-top:1rem;">
            <painel-adiciona-banner></painel-adiciona-banner>
        </div>

        <div class="col-12" style="margin-top:1rem;">
            <painel-adicionar-user></painel-adicionar-user>
        </div>
        
        <div class="col-12" style="margin-top:1rem;">
            <painel-adicionar-evento></painel-adicionar-evento>
        </div> -->
        
    </div>
    @endsection