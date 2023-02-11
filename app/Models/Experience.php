<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'company',
        'start_date',
        'end_date',
        'position',
        'reason_for_leaving',
        'description',
    ];
}
