<?php

namespace App\Models;

use Error;
use Exception;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SmartSync extends Authenticatable
{
    protected $encryptable = [
        // User
        'fullname',

        // payment method
        'address',
        'card',
        'expiry',
        'cvv',

        //sessions
        'ip_address',
        'user_agent',
        'payload',
        'last_activity'
    ];

    public function setAttribute($key, $value)
    {
        if ($this->isEncryptableAttribute($key)) $value = encrypt($value);
        return parent::setAttribute($key, $value);
    }

    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);
        if ($this->isEncryptableAttribute($key) && $value !== null) return decrypt($value);
        return $value;
    }

    protected function isEncryptableAttribute($key)
    {
        return in_array($key, $this->encryptable);
    }
}
