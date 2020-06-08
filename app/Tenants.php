<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    protected $fillable = [
        'f_name','email','phone','no_id','address','occupation_status','at','contact_phone',
        'emg_name','emg_phone'
    ];
}
