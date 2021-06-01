<?php


namespace App\Modules\Backend\Website\Cart\Policies;


use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CartPolicy
{

    use HandlesAuthorization;

    /**
     * Checks the user permission to READ site settings
     * @param User $user
     * @return bool
     */
    public function read(User $user)
    {
        if($user->can('carts-read') || $user->can('cart-read')) {
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
        if($user->can('carts-create') || $user->can('cart-create')) {
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
        if($user->can('carts-update') || $user->can('cart-update')) {
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
        if($user->can('carts-delete') || $user->can('cart-delete')) {
            return true;
        }
        return false;
    }
}
