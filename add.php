<?php

if (isset($_POST['upload'])) {
    $mysql = mysqli_connect("localhost", "root", "Yaguar21022002", "yarik-bd");
    $category = filter_var(trim($_POST['cat']));
    $name = filter_var(trim($_POST['nameprod']));
    $shortdescr = filter_var(trim($_POST['shortdescr']));
    $longdescr = filter_var(trim($_POST['longdescr']));
    $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
    $feature = filter_var(trim($_POST['feature']));
    $mysql->query("INSERT INTO `mause`   (`name`, `shortdescr`, `longdescr`, `image`, `feature`) VALUES('$name', '$shortdescr', '$longdescr','$img', '$feature')");

    $mysql->close();
}