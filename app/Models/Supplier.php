<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'phone',
        'takes_return',
        'image',
    ];

}
