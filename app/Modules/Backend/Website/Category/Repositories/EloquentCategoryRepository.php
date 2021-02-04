<?php


namespace App\Modules\Backend\Website\Category\Repositories;


use App\Models\Website\Category;
use App\Modules\Framework\Repository;
use App\Modules\Framework\RepositoryImplementation;

class EloquentCategoryRepository extends RepositoryImplementation implements CategoryRepository
{

    protected $entity_name="Category";
    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return new Category();
    }


}
