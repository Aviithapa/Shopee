<?php


namespace App\Modules\Backend\Website\Semester\Repositories;


use App\Models\Website\Semester;
use App\Modules\Framework\RepositoryImplementation;

class EloquentSemesterRepository extends RepositoryImplementation implements SemesterRepository
{
    protected $entity_name="semester";
    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return new Semester();
    }

}
