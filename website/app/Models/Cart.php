<?php

namespace App\Models;

use Illuminate\Support\Str;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cart extends SmartSync
{

    protected $fillable = [
        'user_id'
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            $timestamp = now()->format('YmdHis');
            $randomString = Str::random(15); 
            
            $combinedId = (int)($timestamp . $randomString);
    
            $model->id = $combinedId;
        });
    }
}
