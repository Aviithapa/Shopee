<?php


namespace App\Modules\Backend\Website\Blog\Policies;


use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{

    use HandlesAuthorization;

    /**
     * Checks the user permission to READ site settings
     * @param User $user
     * @return bool
     */
    public function read(User $user)
    {
        if($user->can('blogs-read') || $user->can('blog-read')) {
            return true;
        }
        return false;
    }


    /**
     * Checks the user permission to CREATE site settings
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        if($user->can('blogs-create') || $user->can('blog-create')) {
            return true;
        }
        return false;
    }
    /**
     * Checks the user permission to UPDATE site settings
     * @param User $user
     * @return bool
     */
    public function update(User $user)
    {
        if($user->can('blogs-update') || $user->can('blog-update')) {
            return true;
        }
        return false;
    }

    /**
     * Checks the user permission to DELETE site settings
     * @param User $user
     * @return bool
     */
    public function delete(User $user)
    {
        if($user->can('blogs-delete') || $user->can('blog-delete')) {
            return true;
        }
        return false;
    }
}
