<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Tarefa;
use App\Policies\TarefaPolicy;

class AuthServiceProvider extends ServiceProvider
{
   
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Tarefa::class => TarefaPolicy::class,
    ];

    
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
