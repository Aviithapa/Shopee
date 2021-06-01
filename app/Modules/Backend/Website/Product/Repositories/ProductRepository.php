<?php


namespace App\Modules\Backend\Website\Product\Repositories;


use App\Modules\Framework\Repository;

interface ProductRepository extends Repository
{
    public function getModel();

    public function getDataWithPagination($limit);
}
