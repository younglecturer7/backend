<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{
    public function index()
    {
        return User::all();
    }

    public function storeUser($details)
    {
        //
    }

    public function showSingleUser($id)
    {
        //
    }

    public function updateUser($id, $details)
    {
        //
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
