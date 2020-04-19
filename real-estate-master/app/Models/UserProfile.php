<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $fillable = ['user_id', 'profile_image', 'address_1', 'address_2', 'address_3', 'district', 'mobile', 'mobile_verified', 'hide_mobile', 'phone', 'mobile_verification_code'];
}
