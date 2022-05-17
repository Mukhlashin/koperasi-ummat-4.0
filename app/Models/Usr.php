<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usr extends Model
{
    use HasFactory;

    protected $table = 't_usr';
    public $timestamps = false; //by default timestamp true

    protected $fillable = [
        'userid',
        'username',
        'role',
        'email',
        'password',
        'last_login',
        'active',
        'saldo_akun',
    ];
}
