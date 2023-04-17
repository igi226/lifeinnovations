<?php
namespace App\Repositories\User;

interface UserInterface {
    public function getAllUsers();
    public function createUser(array $data);
    public function editUser($id);
    public function updateUser(array $data, $id);
    public function deteteUser($id);
    public function userChangeS($data);
}