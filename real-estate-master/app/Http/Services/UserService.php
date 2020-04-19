<?php
namespace App\Http\Services;

use App\Models\User;
use App\Models\UserProfile;

class UserService
{
	public function create($data)
    {
        $data['password'] = bcrypt($data['password']);
        
        return User::create($data);
    }

    public function update($user, $data)
    {
        return $user->update($data);
    }

    public function delete($user)
    {
        return $user->update($data);
    }

    public function createProfile($data)
    {
        return UserProfile::create($data);
    }

    public function updateProfile($user, $data)
    {
        return $user->update($data);
    }

    public function deleteProfile($user)
    {
        return $user->delete();
    }
}

?>
