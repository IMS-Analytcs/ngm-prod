<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BU extends Model
{
    protected $table = "bus";
    protected $fillable = [
        'name',
        'ativo',
        'type_id',
        'description',
    ];
}