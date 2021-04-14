<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $fillable = ['name','description','price','quantity','image','semester','faculty','edition','university','discount','publication','excerpt','user_id',"category"];

    public function getImage(){
        if(isset($this->image)) {
            return uploadedAsset('product_image', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
}
