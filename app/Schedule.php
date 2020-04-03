<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Schedule extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Sun','Mon','Tue' ,'Wed','Thu','Fri','Sat','user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
 
}
