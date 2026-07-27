<?php
namespace App\Model;

include "BaseModel.php";

class User extends BaseModel {
    public function __construct() {
        echo "new user class Created -> " . __NAMESPACE__ . "<br>";
    }
}
