<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table="_category";

   protected $fillable=["name","slug","description"];
}
