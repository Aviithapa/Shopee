<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $fillable = ['name','description','price','quantity','image','category','excerpt','user_id'];

    public function getImage(){
        if(isset($this->image)) {
            return uploadedAsset('product_image', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
}
