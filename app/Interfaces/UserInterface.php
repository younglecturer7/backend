<?php

namespace App\Interfaces;

Interface UserInterface
{
    public function showAllUsers();
    public function showSingleUser($id);
    public function storeUser($details);
    public function updateUser($id, $details);
    public function deleteSingleUser($id);
    public function deleteMultipleUsers($ids);
}
