<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SshKey extends Model
{
    protected $fillable = [
        'name',
        'public_key',
        'private_key',
        'passphrase',
    ];
}