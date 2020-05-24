<?php

$email = filter_var(trim($_POST['email'])); //фыльтрація логіну від непотрібних данних та створення його змінної

$password = filter_var(trim($_POST['psw'])); //фыльтрація логіну від непотрібних данних та створення його змінної

$mysql = new mysqli("localhost", "root", "Yaguar21022002", "yarik-bd");
$result = $mysql->query("SELECT * FROM `users` WHERE `email`= '$email' AND `password`='$password'");
$user = $result->fetch_assoc();
if (empty($user)) {
   echo "Такой пользователь не найден";
   exit();
}

setcookie('email', $user['email'], time() + 3600, "/");

header('Location:/');
exit();