<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PaymentMethod extends SmartSync
{

    protected $fillable = [
        'user_id',
        'cart_id',
        'address',
        'card',
        'expiry',
        'cvv'
    ];
}
