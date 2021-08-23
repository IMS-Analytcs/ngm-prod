<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typePartnumber extends Model
{
    use HasFactory;
    protected $table = "type_partnumbers";
    protected $fillable = [
        'type',
        'description'

    ];
}

