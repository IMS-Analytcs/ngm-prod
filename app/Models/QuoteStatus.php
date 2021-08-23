<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteStatus extends Model
{
    protected $table = "status";
    protected $fillable = [
        'status',
    ];

    public function Users(){

        return $this->belongsToMany(Quote::class, 'status','QuoteStatus','status')->withTimestamps();
}}