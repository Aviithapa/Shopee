<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="contact";
    protected $fillable=['name','email',"phoneNumber","address","message"];
}
