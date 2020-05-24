<?php
if (isset($_POST['feedbtn'])) {
    $fio = htmlspecialchars($_POST['fio']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_COOKIE['email']);
    $message = htmlspecialchars($_POST['message']);

    $mess = $message . ' \n ' . $fio . ' \n ' . $tel;
    $to = "yarik.loboksite@gmail.com";
    $subject = "питання про продукцію";
    $headers = "From:$email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    mail($to, $subject, $mess, $headers);
    header('Location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "feedback";
    require_once "blocks/head.php";
    ?>
</head>

<body>

    <?php include 'blocks/header.php'; ?>
    <!-- підключення блоку шапки-->

    <div class="wrapper">
        <div class="formReg_Log container">
            <?php include 'blocks/window.php' ?>
        </div> <!-- підключення блоку регістрації, авторизації та пошуку-->
        <div class="container">
            <div class="feed">
                <?php if ($_COOKIE['email'] == '') : ?>
                <div id="noLog">
                    <h1>Написати нам</h1>
                    <p>
                        Для відправки повідомлення потрібно зареєструватися на сайті або увійти в свій акаунт.

                        Після реєстрації, тут з'явиться форма для відправки повідомлення нам.</p>
                </div>
                <?php else : ?>
                <div id="Log">
                    <form action="feedback.php" method="POST">
                        <div class="formcontainer">
                            <h2>форма зворотного зв'язку</h2>
                            <p class="Log">заповніть форму</p>
                            <hr>
                            <label class="Log" for="fio"><b>Ф.І.О</b></label>
                            <input type="text" placeholder="Enter fio" name="fio" required>

                            <label class="Log" for="tel"><b>телефон</b></label>
                            <input type="text" placeholder="Enter telephone" name="tel" required>

                            <label class="Log" for="fulltext" required><b>задати питання</b></label>
                            <br>
                            <textarea name="message"></textarea>

                            <button type="submit" id="feedbtn" name="feedbtn">відправити</button>
                        </div>
                    </form>
                </div>

                <? endif ?>
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