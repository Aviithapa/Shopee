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

        public function getAll()
        {
            return $this->getModel()->where('status', 'active')->get();
        }

    public function getAllInActive()
    {
        return $this->getModel()->where('status', 'in-active')->get();
    }

    public function getDataWithPagination($limit=null)
    {
        if($limit)
            return $this->getModel()->latest()->paginate($limit);
        return $this->getModel()->latest()->paginate($this->paginate);

    }
}
