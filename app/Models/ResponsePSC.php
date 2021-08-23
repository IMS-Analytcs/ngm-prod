<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsePSC extends Model
{
    use HasFactory;

    protected $table = 'response_psc';

    protected $fillable = [
        'reponse',
        'psc_id'
    ];
}
