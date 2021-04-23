<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['action'];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m',
    ];
}
