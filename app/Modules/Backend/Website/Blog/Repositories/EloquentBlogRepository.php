<?php


namespace App\Modules\Backend\Website\Blog\Repositories;


use App\Models\Website\Blog;
use App\Modules\Framework\RepositoryImplementation;

class EloquentBlogRepository extends RepositoryImplementation implements BlogRepository
{
    protected $entity_name="Blog";
    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return new Blog();
    }
}
