<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "about";
    require_once "blocks/head.php";
    ?>
</head>

<body>
    <?php include 'blocks/header.php'; ?>

    <div class="wrapper">
        <div class="formReg_Log container">
            <?php include 'blocks/window.php' ?>
        </div> <!-- підключення блоку регістрації, авторизації та пошуку-->
        <div class="container">

            <div id="content">
                <div class="container">
                    <div id="support">
                        <h2>ТЕХНІЧНА ПІДТРИМКА</h2>
                        <h3>Час роботи технічної підтримки:</h3>
                        <p>Понеділок - Субота: з 08:00 до 20:00;</p>
                        <h3>Контакти:</h3>
                        <p>+38 (093) 123 4567</p>
                        <p>0800969696</p>
                        <br>
                        <p>ви можете написати нам повідомлення на сторінці <a href="feedback.php">feedback</a>; </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'blocks/footer.php'; ?>

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