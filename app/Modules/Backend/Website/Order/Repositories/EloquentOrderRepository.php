<?php


namespace App\Modules\Backend\Website\Order\Repositories;


use App\Models\Website\Order;
use App\Modules\Framework\RepositoryImplementation;

class EloquentOrderRepository extends RepositoryImplementation implements OrderRepository
{
    protected $entity_name="order";
    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return new Order();
    }
}
