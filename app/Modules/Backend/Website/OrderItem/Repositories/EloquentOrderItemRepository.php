<?php


namespace App\Modules\Backend\Website\OrderItem\Repositories;


use App\Models\Website\Cart;
use App\Models\Website\OrderItem;
use App\Modules\Framework\RepositoryImplementation;

class EloquentOrderItemRepository extends RepositoryImplementation implements OrderItemRepository
{
    protected $entity_name="order_item";
    /**
     * @inheritDoc
         */
        public function getModel()
          {
              return new OrderItem();
          }

}
