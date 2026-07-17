<?php

class Users extends BaseModel {
    protected string $table = 'users';
}

$userModel = new Users();
$userData = $userModel->find(2);
$userModel->update();

var_dump($userData);
