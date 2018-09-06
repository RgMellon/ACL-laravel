<?php

namespace App\Policies;

use App\User;
use App\Tarefa;
use Illuminate\Auth\Access\HandlesAuthorization;

class TarefaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tarefa.
     *
     * @param  \App\User  $user
     * @param  \App\Tarefa  $tarefa
     * @return mixed
     */
    public function view(User $user, Tarefa $tarefa)
    {
        return $user->admin == 1;
    }

    /**
     * Determine whether the user can create tarefas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
       return $user->admin == 1;
    }

    /**
     * Determine whether the user can update the tarefa.
     *
     * @param  \App\User  $user
     * @param  \App\Tarefa  $tarefa
     * @return mixed
     */
    public function update(User $user, Tarefa $tarefa)
    {
        //
    }

    /**
     * Determine whether the user can delete the tarefa.
     *
     * @param  \App\User  $user
     * @param  \App\Tarefa  $tarefa
     * @return mixed
     */
    public function delete(User $user, Tarefa $tarefa)
    {
        //
    }

    /**
     * Determine whether the user can restore the tarefa.
     *
     * @param  \App\User  $user
     * @param  \App\Tarefa  $tarefa
     * @return mixed
     */
    public function restore(User $user, Tarefa $tarefa)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tarefa.
     *
     * @param  \App\User  $user
     * @param  \App\Tarefa  $tarefa
     * @return mixed
     */
    public function forceDelete(User $user, Tarefa $tarefa)
    {
        //
    }
}
