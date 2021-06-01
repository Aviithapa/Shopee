<?php


namespace App\Modules\Backend\Website\Faculty\Repositories;


use App\Models\Website\Faculty;
use App\Modules\Framework\RepositoryImplementation;

class EloquentFacultyRepository extends RepositoryImplementation implements FacultyRepository
{
    protected $entity_name="faculty";
    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return new Faculty();
    }

}
