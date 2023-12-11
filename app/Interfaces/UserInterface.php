<?php

namespace App\Interfaces;

Interface UserInterface
{
    public function showAllUsers();
    public function showSingleUser($id);
    public function storeUser($validatedUser);
    public function updateUser($id, $validatedUser);
    public function deleteSingleUser($id);
    public function deleteMultipleUsers($ids);
}
