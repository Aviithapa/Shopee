<?php


namespace App\Modules\Backend\Website\Cart\Repositories;


use App\Models\Website\Cart;
use App\Modules\Framework\RepositoryImplementation;

class EloquentCartRepository extends RepositoryImplementation implements CartRepository
{
    protected $entity_name="Cart";
    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return new Cart();
    }
}
