<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMail extends Model
{
    use HasFactory;

    protected $table = "send_email";

    protected $fillable = [
        'group',
        'email'
    ];
}