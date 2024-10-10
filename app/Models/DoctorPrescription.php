<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorPrescription extends Model
{
    use HasFactory;

    protected $table = 'doctor_prescription';

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_Id');
    }


}
