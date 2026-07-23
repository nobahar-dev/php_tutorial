<?php
include "autoloader.php";

use App\Model\User;
use App\Classes\Utility;

$user = new User("mahdi");
echo $user->getName() . "<br>";

echo Utility::sayHI() . "<br>";
