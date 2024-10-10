<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Frame;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',       
        'fname',       
        'lname',   
        'full_name',
        'gender',
        'mobile_no',
        'date_of_birth',
        'age',
        'nic_no',
        'address', 
    ];

    protected $table = 'customers';
    protected $primaryKey = 'id';

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cashLedgers()
    {
        return $this->hasMany(CashLedger::class);
    }

    public function doctorprescriptions()
    {
        return $this->hasMany(DoctorPrescription::class);
    }

    public function frames()
    {
        return $this->hasManyThrough(
            Frame::class,
            Order::class,
            'customer_id', // Foreign key on orders table
            'id', // Foreign key on frames table
            'id', // Local key on customers table
            'frame_id' // Local key on orders table
        );
    }


}
