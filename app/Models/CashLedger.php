<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashLedger extends Model
{
    use HasFactory;

    protected $table = 'cash_ledger';
    
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
