<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['contract_no', 'name','position','company','address','service_details','subject','schedule_of_broadcast','start_of_broadcast','end_of_broadcast','billing_rate'];

    public function payment() :HasMany{
        return $this->hasMany(Payment::class);
    }
}
