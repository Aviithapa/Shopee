<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table="faculty";
    protected $fillable=['name','display_name',"description"];
}
