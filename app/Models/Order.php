<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $primaryKey = 'id';
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderitem()
    {
        return $this->hasMany(Order::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
