<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationalCost extends Model
{
    use HasFactory;
    protected $table = "operational_cost";
    protected $fillable = [
        'level',
        'type',
        'cost_hour',
    ];
}
