<?php
$cat = filter_var(trim($_GET["cat"]));
$id = filter_var(trim($_GET["id"]));
$mysql = new mysqli("localhost", "root", "Yaguar21022002", "yarik-bd");
$result = $mysql->query("SELECT * FROM $cat WHERE id = $id ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Homepage";
    require_once "blocks/head.php";
    ?>
    <link rel="stylesheet" href="CSS/style.css">
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
                        echo '<div class="prodAll"><div class="Descrprod"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageproductr"><p>' . $row['shortdescr'] . '</p><h2>опис:</h2><p class="Descr">' . $row['longdescr'] . '</p><h2>характеристики:</br>' . $row['feature'] . '</h2> </div></div>';
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
    >

</body>

</html>