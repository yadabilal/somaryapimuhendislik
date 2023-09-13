<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Status
    const STATUS_STEP_SECOND = 'STEP_SECOND';
    const STATUS_STEP_THIRD = 'STEP_THIRD';
    const STATUS_COMPLETED = 'COMPLETED';

    const DEFAULT_BALANCE = 4;
    // Types
    const TYPE_USER = 'U';
    const TYPE_COMPANY = 'C';
    const TYPE_ADMIN = 'A';

    // Genders
    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';

    const LIST_ADMIN = 10;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'uuid', 'total_balance', 'name', 'surname',
      'about', 'username', 'status','identify',
      'city_id', 'town_id','type', 'gender',
      'birth_date', 'phone', 'phone_code','phone_verified_at',
      'password', 'identify_verified_at', 'address', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'phone_verified_at' => 'datetime'
    ];
}
