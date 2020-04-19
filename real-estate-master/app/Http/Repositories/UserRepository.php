<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository
{
    public function findAll($type)
    {
        return User::where('user_type', $type)->latest('id')->get();
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function getUser($type, $data)
    {
        return User::where($type, $data)->first();
    }

}
