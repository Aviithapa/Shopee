<?php


namespace App\Modules\Backend\Website\Categories\Repositories;

use App\Models\Website\Category;
use App\Modules\Framework\RepositoryImplementation;
class EloquentCategoriesRepository extends RepositoryImplementation implements CategoriesRepository
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
