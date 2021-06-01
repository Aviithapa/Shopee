<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table="categories";
    protected $fillable=['title','slug','content','type'];
}
