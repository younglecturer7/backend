<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{
    public function showAllUsers()
    {
        return User::all();
    }

    public function storeUser($validatedUser)
    {
        return User::create($validatedUser);
    }

    public function showSingleUser($id)
    {
        return User::FindorFail($id);
    }

    public function updateUser($id, $details)
    {
        return User::whereId($id)->update($details);
    }

    public function deleteSingleUser($id)
    {
        //
    }

    public function deleteMultipleUsers($ids)
    {
        //
    }
}
