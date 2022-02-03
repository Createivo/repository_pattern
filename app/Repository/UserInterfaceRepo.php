<?php 

namespace App\Repository ; 

interface UserInterfaceRepo {
    public function getAllUsers();

    public function getUser($id);

    public function createOrUpdate($id = null , $collection = []);
}