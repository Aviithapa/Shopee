<?php


namespace App\Models\Website;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="order";

    protected $fillable = [
        'id','name', 'user_id', 'status', 'grand_total', 'item_count','email','collage_name','collage_address',
        'address', 'phone_number', 'notes' ,"payment_method" , "payment_status"
    ];

     public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }


}
