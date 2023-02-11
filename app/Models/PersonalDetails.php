<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'about',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'website',
        'github',
        'linkedin',
        'twitter',
        'facebook',
        'instagram',
        'youtube',
    ];
}
