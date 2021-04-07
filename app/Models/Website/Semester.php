<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table="semester";
    protected $fillable=['name','display_name',"description "];
}
