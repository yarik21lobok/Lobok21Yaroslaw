<?php
$searchName = filter_var(trim($_POST['searchName']));
$mysql = new mysqli("localhost", "root", "Yaguar21022002", "yarik-bd");
$laptops = $mysql->query("SELECT * FROM laptops WHERE `name`= '$searchName' ORDER BY id DESC");
$smartphones = $mysql->query("SELECT * FROM smartphones WHERE `name`= '$searchName' ORDER BY id DESC");
$mause = $mysql->query("SELECT * FROM mause WHERE `name`= '$searchName' ORDER BY id DESC");
$keyboards = $mysql->query("SELECT * FROM keyboards WHERE `name`= '$searchName' ORDER BY id DESC");
$audio = $mysql->query("SELECT * FROM audio WHERE `name`= '$searchName' ORDER BY id DESC");
$gamepads = $mysql->query("SELECT * FROM gamepads WHERE `name`= '$searchName' ORDER BY id DESC");
?>
<!-- while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . ' "> категорія: <input type="text" name="categ" value="' . $category . '"> назва: ' .
        $row['name'] . '</form></br>';
} -->


<!-- не работает поиск когда залогинен
не работает поиск когда залогинен
не работает поиск когда залогинен
не работает поиск когда залогинен -->

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Homepage";
    require_once "blocks/head.php";
    ?>
</head>

<body>
    <div id="site">
        <?php include 'blocks/header.php'; ?>
        <!-- підключення блоку шапки-->

        <div class="wrapper">
            <div class="formReg_Log container">
                <?php include 'blocks/window.php' ?>
            </div> <!-- підключення блоку регістрації, авторизації та пошуку-->
            <div class="container">

                <div id="content">



                    <?php
                    while ($row = mysqli_fetch_assoc($laptops)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=laptops&id=' . $row['id'] . '">ознайомитись</a></div></div>';
                    }

                    ?>

                    <?php
                    while ($row = mysqli_fetch_assoc($smartphones)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=smartphones&id=' . $row['id'] . '">ознайомитись</a></div></div>';
                    }

                    ?>

                    <?php
                    while ($row = mysqli_fetch_assoc($mause)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=mause&id=' . $row['id'] . '">ознайомитись</a></div></div>';
                    }

                    ?>

                    <?php
                    $IMG = base64_encode($row['image']);
                    while ($row = mysqli_fetch_assoc($keyboards)) {
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=keyboards&id=' . $row['id'] . '">ознайомитись</a></div></div>';
                    }

                    ?>

                    <?php
                    $IMG = base64_encode($row['image']);
                    while ($row = mysqli_fetch_assoc($audio)) {
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=audio&id=' . $row['id'] . '">ознайомитись</a></div></div>';
                    }

                    ?>

                    <?php
                    $IMG = base64_encode($row['image']);
                    while ($row = mysqli_fetch_assoc($gamepads)) {
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=gamepads&id=' . $row['id'] . '">ознайомитись</a></div></div>';
                    }

                    ?>


                    <div id="noSr">
                        <h2>ЯКЩО ПОШУК НЕ ДАВ РЕЗУЛЬТАТІВ, СПРОБУЙТЕ ЗНОВУ.</h2>
                        <h2>ВИ МОЖЕТЕ ОЗНАЙОМИТИСЯ ІЗ НАШОЮ ПРОДУКЦІЄЮ ЧЕРЕЗ КАТАЛОГ .</h2>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'blocks/footer.php'; ?>
        <!-- підключення блоку підвалу-->

    </div>
    <?php if ($_COOKIE['email'] == '') : ?>
    <script>
    onload();
    </script>
    <?php else : ?>
    <script>
    onload_noLog();
    </script>
    <?php endif; ?>

</body>

</html>