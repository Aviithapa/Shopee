<?php


namespace App\Modules\Backend\Website\Product\Repositories;


use App\Models\Website\Product;
use App\Modules\Framework\RepositoryImplementation;

class EloquentProductRepository extends RepositoryImplementation implements ProductRepository
{
        protected $entity_name="Product";

        public function getModel(){
            return new Product();
        }

}
