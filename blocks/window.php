<div class="formReg">
    <form action="check.php" method="POST">
        <div class="formcontainer">
            <span id="closeReg">&times;</span>
            <h2 class="Regh">Форма регістрації</h2>
            <p class="Reg">заповніть форму для створення облікового запису</p>
            <hr>
            <label class="Reg" for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label class="Reg" for="name"><b>Ім'я</b></label>
            <input type="text" placeholder="name" name="name" required>

            <label class="Reg" for="логін"><b>логін</b></label>
            <input type="text" placeholder="login" name="login" required>

            <label class="Reg" for="psw"><b>пароль</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" class="psw" required>
            <label class="Reg" for="psw-repeat"><b>повторити пароль</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" class="psw-repeat" required>

            <script>
            $(".psw-repeat").on("keyup", function() { // Выполняем скрипт при изменении содержимого 2-го поля

                var value_input1 = $(".psw").val(); // Получаем содержимое 1-го поля
                var value_input2 = $(this).val(); // Получаем содержимое 2-го поля

                if (value_input1 != value_input2) { // Условие, если поля не совпадают

                    $(".error").html("Пароли не совпадают!"); // Выводим сообщение
                    $("#pass").val('');
                    $("#submit").attr("disabled", "disabled"); // Запрещаем отправку формы

                } else { // Условие, если поля совпадают

                    $("#submit").removeAttr("disabled"); // Разрешаем отправку формы
                    $(".error").html(""); // Скрываем сообщение
                    $("#pass").val('error');

                }

            });
            </script>

            <div class="error">
            </div>
            <input type="text" name="pass" id="pass" required>
            <button type="submit" class="registerbtn">зареєструватися</button>
        </div>
    </form>
    <div class="signin">
        <p>уже є аккаунт? <button id="Acc">авторизуватися</button>.</p>
    </div>
</div>
<div class="formLog">
    <form action="auth.php" method="POST">
        <div class="formcontainer">
            <span id="closeLog">&times;</span>
            <h2>Форма авторизації</h2>
            <p class="Log">заповніть форму входу в обліковый запис</p>
            <hr>
            <label class="Log" for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label class="Log" for="psw"><b>пароль</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="registerbtn">авторизуватися</button>
        </div>
    </form>
    <div class="container signin">
        <p>немає акаунту <button id="noAcc">зареєструватися</button>.</p>
    </div>

</div>

<div id="search">
    <form action="search.php" method="POST">
        <div class="formcontainer">
            <span id="closeSrch">&times;</span>
            <h2>введіть назву продукту</h2>
            <input type="text" placeholder="Enter searchName" name="searchName" required>

            <button type="submit" class="searchbtn">знайти</button>
        </div>
    </form>
</div>