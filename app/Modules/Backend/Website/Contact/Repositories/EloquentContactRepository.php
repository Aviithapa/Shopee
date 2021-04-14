<?php


namespace App\Modules\Backend\Website\Contact\Repositories;


use App\Models\Website\Contact;
use App\Modules\Framework\RepositoryImplementation;

class EloquentContactRepository extends RepositoryImplementation implements ContactRepository
{
    protected $entity_name="Contact";
    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return new Contact();
    }
}
