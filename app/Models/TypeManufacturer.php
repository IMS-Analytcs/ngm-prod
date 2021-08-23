<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeManufacturer extends Model
{
    use HasFactory;
    protected $table = "type_manufacturers";
    protected $fillable = [
        'name',
    ];

}