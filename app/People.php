<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    // fillable variables 
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


    public function setBirthDateAttribute($date)
    {
        
        $this->attributes['birth_date'] = Carbon::createFromFormat('Y-m-d', $date);

    }
}
