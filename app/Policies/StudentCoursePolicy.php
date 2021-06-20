<?php

namespace App\Policies;

use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentCoursePolicy
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
        return $user->can('view StudentCourse');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return mixed
     */
    public function view(User $user, StudentCourse $studentCourse)
    {
        //
        return $user->can('view StudentCourse');
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
        return $user->can('create StudentCourse');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return mixed
     */
    public function update(User $user, StudentCourse $studentCourse)
    {
        //
        return $user->can('update StudentCourse');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return mixed
     */
    public function delete(User $user, StudentCourse $studentCourse)
    {
        //
        return $user->can('delete StudentCourse');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return mixed
     */
    public function restore(User $user, StudentCourse $studentCourse)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return mixed
     */
    public function forceDelete(User $user, StudentCourse $studentCourse)
    {
        //
    }
}
