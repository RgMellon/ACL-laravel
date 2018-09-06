<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;
use App\User;

class TarefaController extends Controller
{
    
    public function store(Request $request)
    {   
        return Tarefa::create([
            'user_id' => auth()->user()->id,
            'title' => $request->get('title'),
            'descricao' => $request->get('descricao'),
            'start' => $request->get('start')
        ]);

    }

    
    public function getTarefasByUser()
    {
        return Tarefa::all();
    }

}
