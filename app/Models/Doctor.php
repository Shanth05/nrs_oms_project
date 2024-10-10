<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\DoctorPrescription;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor';
    protected $primaryKey = 'id';

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function doctorprescriptions()
    {
        return $this->hasMany(DoctorPrescription::class);
    }


    public function customers()
    {
        return $this->hasManyThrough(
            Customer::class,
            DoctorPrescription::class,
            'doctor_Id', // Foreign key.
            'id', // Foreign key
            'id', // Local key 
            'customer_id' // Local key on
        );
    }



}
