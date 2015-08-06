<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    // 
    protected $fillable	 = [
        'name',
        'last_name',
        'dni',
        'birth_date',
        'street_name',
        'street_number',
        'floor',
        'department',
        'neightborhood',
        'country',
        'province',
        'locality',
        'postal_code',
        'cell_phone',
        'phone',
        'phone_at_work',
        'email',
        'facebook'
    ];
}
