<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerRequest extends Model
{
    use HasFactory;
    protected $table = 'dealerrequest';
    protected $fillable = [
        'dealername',
        'address',
        'email',
        'phone',
        'gsm',
        'faks',
        'taxadministration',
        'taxnumber',
        'website',
        'shippingaddress',
        'addresspayment',
    ];
}
