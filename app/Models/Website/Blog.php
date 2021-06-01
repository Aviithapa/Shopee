<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blog";
    protected $fillable=['book_name','content',"excerpt","name","image","product_id"];

    public function getBloggerImage(){
        if(isset($this->image)) {
            return uploadedAsset('blogger_pic', $this->image);
        }
        else {
            return imageNotFound();
        }
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
