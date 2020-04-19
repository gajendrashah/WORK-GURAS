<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\UserProfile;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = ['full_name', 'email', 'password', 'user_type', 'external_auth', 'provider', 'provider_id', 'registered_ip', 'email_verified', 'verification_token', 'status', 'created_by_id', 'last_logged_ip', 'last_active', 'varification_code', 'remember_token', 'deleted_at'];

    public function userProfile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

}
