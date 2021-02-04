<?php


namespace App\Modules\Backend\Website\Product\Policies;


use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Checks the user permission to READ site settings
     * @param User $user
     * @return bool
     */
    public function read(User $user)
    {
        if($user->can('products-read') || $user->can('products-read')) {
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
        if($user->can('products-create') || $user->can('products-create')) {
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
        if($user->can('products-update') || $user->can('products-update')) {
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
        if($user->can('products-delete') || $user->can('products-delete')) {
            return true;
        }
        return false;
    }
}
