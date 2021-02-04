<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
 protected $table="carts";
 protected $fillable=['product_name','product_price',"quantity","mac"];
}
