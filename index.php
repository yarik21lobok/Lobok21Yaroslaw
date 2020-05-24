<?php
$mysql = new mysqli("localhost", "root", "Yaguar21022002", "yarik-bd");
$laptops = $mysql->query("SELECT * fROM `laptops` ORDER BY `id` DESC LIMIT 1");
$smartphones = $mysql->query("SELECT * fROM `smartphones` ORDER BY `id` DESC LIMIT 1");
$mause = $mysql->query("SELECT * fROM `mause` ORDER BY `id` DESC LIMIT 1");
$keyboards = $mysql->query("SELECT * fROM `keyboards` ORDER BY `id` DESC LIMIT 1");
$audio = $mysql->query("SELECT * fROM `audio` ORDER BY `id` DESC LIMIT 1");
$gamepads = $mysql->query("SELECT * fROM `gamepads` ORDER BY `id` DESC LIMIT 1");
?>
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
                    while ($row = mysqli_fetch_array($laptops)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=laptops&id=' . $row['id'] . '">ознайомитись>></a></div> </div>';
                    } ?>

                    <?php
                    while ($row = mysqli_fetch_array($smartphones)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=smartphones&id=' . $row['id'] . '">ознайомитись>></a></div> </div>';
                    } ?>

                    <?php
                    while ($row = mysqli_fetch_array($mause)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=mause&id=' . $row['id'] . '">ознайомитись>></a></div> </div>';
                    } ?>

                    <?php
                    while ($row = mysqli_fetch_array($keyboards)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=keyboards&id=' . $row['id'] . '">ознайомитись>></a></div> </div>';
                    } ?>

                    <?php
                    while ($row = mysqli_fetch_array($audio)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=audio&id=' . $row['id'] . '">ознайомитись>></a></div> </div>';
                    } ?>

                    <?php
                    while ($row = mysqli_fetch_array($gamepads)) {
                        $IMG = base64_encode($row['image']);
                        echo '<div class="bigArticle"><img src="data:image/jpeg;base64, ' . $IMG . '" alt="" class="imageprod"><div class="prodDescr"><h2 class="bigArticle_heading">' . $row['name'] . '</h2><p>' . $row['shortdescr'] . '</p> <br><a href="product.php?cat=gamepads&id=' . $row['id'] . '">ознайомитись>></a> </div></div>';
                    } ?>

                </div>
            </div>
        </div>
    </div>
    <?php include 'blocks/footer.php'; ?>

    <!-- підключення блоку підвалу-->
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