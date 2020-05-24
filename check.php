<?php

$login = filter_var(trim($_POST['login'])); //фыльтрація логіну від непотрібних данних та створення його змінної
$name = filter_var(trim($_POST['name'])); //фыльтрація логіну від непотрібних данних та створення його змінної
$email = filter_var(trim($_POST['email'])); //фыльтрація логіну від непотрібних данних та створення його змінної

$password = filter_var(trim($_POST['psw'])); //фыльтрація логіну від непотрібних данних та створення його змінної

if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
   echo "недопустимая длина логина";
} else if (mb_strlen($name) < 5 || mb_strlen($name) > 90) {
   echo "недопустимая длина імені";
} else if (mb_strlen($email) < 5 || mb_strlen($email) > 90) {
   echo "недопустимая длина імейлу";
} else if (mb_strlen($password) < 5 || mb_strlen($password) > 90) {
   echo "недопустимая длина паролю";
}
setcookie('email', $email, time() + 3600, "/");

$mysql = new mysqli("localhost", "root", "Yaguar21022002", "yarik-bd");
$mysql->query("INSERT INTO `users` (`email`, `name`, `login`, `password`) VALUES('$email', '$name', '$login',  '$password')");

$mysql->close();
header("Location: /");