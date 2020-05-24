<?php
$mysql = mysqli_connect("localhost", "root", "Yaguar21022002", "yarik-bd");
if (isset($_POST['dell'])) {
    $id = $_POST['dell'];
    $cat = $_POST['categ'];
    echo $id;
    echo $cat;
    $del =  mysqli_query($mysql, "DELETE FROM $cat WHERE `id`='$id'");
}

if (isset($_POST['upload'])) {
    $mysql = mysqli_connect("localhost", "root", "Yaguar21022002", "yarik-bd");
    $category = filter_var(trim($_POST['cat']));
    $name = filter_var(trim($_POST['nameprod']));
    $shortdescr = filter_var(trim($_POST['shortdescr']));
    $longdescr = filter_var(trim($_POST['longdescr']));
    $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
    $feature = filter_var(trim($_POST['feature']));
    $mysql->query("INSERT INTO `$category`   (`name`, `shortdescr`, `longdescr`, `image`, `feature`) VALUES('$name', '$shortdescr', '$longdescr','$img', '$feature')");
    $mysql->close();
    header('Location: ./admin.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Админка</title>
</head>

<body>

    <?php if ($_COOKIE['email'] == 'yarik.lobok@gmail.com') : ?>
    <!--перевірка адміна -->

    <?php if (!$_POST['dellProd']) : ?>
    <?php
            $login = filter_var(trim($_POST['name']));
            echo "$login";
            ?>
    <div id="prodAdd">
        <form action="admin.php" method="POST" enctype="multipart/form-data">

            <input type="radio" class="radCategory" value="laptops" name="cat" checked> <label
                for="radCategory">laptops</label>

            <input type="radio" class="radCategory" value="smartphones" name="cat">
            <label for="radCategory">smartphones</label>

            <input type="radio" class="radCategory" value="mause" name="cat">
            <label for="radCategory">mause</label>

            <input type="radio" class="radCategory" value="keyboards" name="cat">
            <label for="radCategory">keyboards</label>

            <input type="radio" class="radCategory" value="audio" name="cat">
            <label for="radCategory">audio</label>

            <input type="radio" class="radCategory" value="gamepads" name="cat">
            <label for="radCategory">gamepads</label>
            <hr>
            <label for="name">имя продукта</label>
            <textarea name="nameprod" required></textarea>
            <hr>
            <label for="shortdescr">короткое описание( &lt500символів)</label> <textarea name="shortdescr"></textarea>
            <hr>
            <label for="longdescr">полное описание</label>
            <textarea name="longdescr"></textarea>
            <hr>
            <label for="longdescr">добавить фотографию</label>
            <input type="file" name=img_upload></input>
            <hr>
            <label for="feature">характеристики</label>
            <textarea name="feature"></textarea>
            <hr>

            <p><input type="submit" name="upload" value="создать продукт"></p>
        </form>
    </div>
    <!--добавление продукта в базу данных-->


    <div id="prodDell">
        <form action="admin.php" method="POST" enctype="multipart/form-data">
            <input type="radio" class="radCategory" value="laptops" name="cat" checked> <label
                for="radCategory">laptops</label>

            <input type="radio" class="radCategory" value="smartphones" name="cat">
            <label for="radCategory">smartphones</label>

            <input type="radio" class="radCategory" value="mause" name="cat">
            <label for="radCategory">mause</label>

            <input type="radio" class="radCategory" value="keyboards" name="cat">
            <label for="radCategory">keyboards</label>

            <input type="radio" class="radCategory" value="audio" name="cat">
            <label for="radCategory">audio</label>

            <input type="radio" class="radCategory" value="gamepads" name="cat">
            <label for="radCategory">gamepads</label>
            <hr>
            <p><input type="submit" value="редактировать продукты этой категории" name="dellProd"></p>
        </form>
    </div>
    <?php endif; ?>


    <?php if ($_POST['dellProd']) :
            $category = filter_var(trim($_POST['cat']));

            $arr =  mysqli_query($mysql, "SELECT * FROM $category ORDER BY id DESC");

            while ($row = mysqli_fetch_assoc($arr)) {
                echo '<form action="/admin.php" method="post"> DELETE-   <input type="submit" name="dell" value="           ' . $row['id'] . '           "> категорія: <input type="text"  name="categ" value="' . $category . '">    назва:  ' . $row['name'] . '</form></br>';
            }

        ?>
    <?php endif; ?>

    <?php endif; ?>
</body>

</html>