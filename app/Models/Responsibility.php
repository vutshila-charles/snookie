<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    use HasFactory;
    protected $fillable = [
        'experience_id',
        'user_id',
       'responsibility',
    ];
}
