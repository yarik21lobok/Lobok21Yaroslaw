<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Homepage";
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
            <div class="guarantee">
                <div style="padding-top:30px">
                    <h1>ГАРАНТіЯ НА ПРОДУКЦіЮ ЯRIK В УКРАЇНІ</h1>
                    <h2>Гарантійне обслуговування надається за місцем купівлі продукції ЯRIK.</h2>
                    <p>Компанія ЯRIK встановлює гарантійний термін, який обчислюється з дати продажу виробу, за умови
                        дотримання
                        правил експлуатації виробу.
                        У разі якщо Вашому пристрою ЯRIK потрібно гарантійне обслуговування, зверніться за місцем
                        придбання
                        товару в відділи гарантії.</p>
                    <h2>Терміни гарантії на продукцію ЯRIK в УКРАЇНІ:</h2>

                    <table id="garant border=" 0" style="padding-left: 10px">

                        <tr>
                            <td class="prodCat">
                                <p>Ноутбуки</p>
                            </td>
                            <td class="prodYEAR">
                                <p>3 РОКИ</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="prodCat">
                                <p>смартфони</p>
                            </td>
                            <td class="prodYEAR">
                                <p>1.5 РОКИ</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="prodCat">
                                Миші</p>
                            </td>
                            <td class="prodYEAR">
                                <p>2 РОКИ</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="prodCat">
                                <p>Клавіатури и Кейпади</p>
                            </td>
                            <td class="prodYEAR">
                                <p>2 РОКИ</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="prodCat">
                                <p>Гарнітурм і Аудіоколонки</p>
                            </td>
                            <td class="prodYEAR">
                                <p>2 РОКИ</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="prodCat">
                                <p>Навушники</p>
                            </td>
                            <td class="prodYEAR">
                                <p>1 РОКИ</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" class="prodCat">
                                <p>Контроллеры та геймпади</p>
                            </td>
                            <td valign="top" class="prodYEAR">
                                <p>3 РОКИ</p>
                            </td>

                    </table>

                    <p>Ця гарантія не поширюється на витратні матеріали та додаткові пристрої (ніжки для мишей,
                        амбушюри, дроти), що використовуються разом з виробом, а також на несправності, що виникли в
                        результаті:</p>
                    <ul>
                        <li>
                            <p>Наявності механічних пошкоджень;</p>
                        </li>
                        <li>
                            <p>Недотримання правил використання та експлуатації;</p>
                        </li>
                        <li>
                            <p>Попадання всередину виробу вологи, піску, комах;</p>
                        </li>
                        <li>
                            <p>Самостійного ремонту;</p>
                        </li>
                        <li>
                            <p>Використання неякісних елементів живлення;</p>
                        </li>
                        <li>
                            <p>Дії непереборної сили.</p>
                        </li>
                    </ul>

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