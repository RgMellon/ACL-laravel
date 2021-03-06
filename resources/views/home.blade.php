@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="faixa" style="margin-top:2rem;">
            <faixa-escola></faixa-escola>
        </section>

        <section class="carrosel" style="margin-top:2rem;">
            <carrosel-page></carrosel-page>
        </section>

        <section class="cronograma" style="margin-top:2rem;">
            @can('create', App\Tarefa::class)
                <cronograma-home> </cronograma-home>
            @else 
                <cronograma-admin></cronograma-admin>
            @endcan
        </section> 

        
    
        <section class="destaques" style="margin-top:6rem;">
            <destaques-home> </destaques-home>
        </section>
    
        
        <!-- <section class="relatorio" style="margin-top:2rem;">
            <relatorio-contato> <relatorio-contato>
        </section> -->
    </div>    
@endsection
