<?php
$cat = filter_var(trim($_GET["cat"]));
$mysql = new mysqli("localhost", "root", "Yaguar21022002", "yarik-bd");
$result = $mysql->query("SELECT * FROM $cat ORDER BY id DESC");

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
                    while ($row = mysqli_fetch_assoc($result)) {
                        $IMG = base64_encode($row['image']);

                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=' . $cat . '&id=' . $row['id'] . '">ознайомитись>></a></div> </div>';
                    }

                    ?>


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