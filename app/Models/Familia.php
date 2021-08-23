<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table = "familia";

    protected $fillable = [
        'name',
        'manufecturer_id',
        'group_id',
    ];

}