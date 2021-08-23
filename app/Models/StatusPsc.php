<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPsc extends Model
{
    use HasFactory;

    protected $table = "status_psc";

    protected $fillable = [
      'description'
    ];
}
