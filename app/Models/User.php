<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use LdapRecord\Laravel\Auth\LdapAuthenticatable;
use LdapRecord\Laravel\Auth\AuthenticatesWithLdap;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use Notifiable, AuthenticatesWithLdap;


    protected $fillable = [
        'name',
        'email',
        'password',
        'perfil',
        'username',
        'owner',
        'guid',
        'domain',
        'email',
        'cn'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
