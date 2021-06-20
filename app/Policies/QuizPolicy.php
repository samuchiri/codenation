<?php

namespace App\Policies;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuizPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        return $user->can('view Quiz');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return mixed
     */
    public function view(User $user, Quiz $quiz)
    {
        //
        return $user->can('view Quiz');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->can('create Quiz');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return mixed
     */
    public function update(User $user, Quiz $quiz)
    {
        //
        return $user->can('update Quiz');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return mixed
     */
    public function delete(User $user, Quiz $quiz)
    {
        //
        return $user->can('delete Quiz');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return mixed
     */
    public function restore(User $user, Quiz $quiz)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return mixed
     */
    public function forceDelete(User $user, Quiz $quiz)
    {
        //
    }
}
