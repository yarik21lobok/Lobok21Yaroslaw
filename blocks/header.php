<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="headerSection menuShow">
                <!--добавить скрипт открытия выпадающего меню -->

                <button type="button" class="headerButton loginButton" id="mobMenubtn" style="height: 50px">
                    <i class="fas fa-bars"></i>
                </button>
                <div id="mobileMenu">
                    <span id="closeMenu">&times;</span>
                    <ul class="mobileMenuList">
                        <li class="mobileItem">
                            <p>КАТАЛОГ:</p>
                            <ul class="mobMenu">
                                <li><a href="/">новинки</a></li>
                                <li><a href="laptops.php">ноутбуки</a></li>
                                <li><a href="smartphones.php">смартфони</a></li>
                                <li><a href="mause.php">миші</a></li>
                                <li><a href="keyboards.php">клавіатури</a></li>
                                <li><a href="audio.php">аудіо</a></li>
                                <li><a href="gamepads.php">геймпади</a></li>

                            </ul>
                        </li>
                        <li class="mobileItem">
                            <p>СПІЛКУВАННЯ:</p>
                            <ul class="mobMenu">
                                <li><a href="https://t.me/yaroslaw69" title="Telegram" target="_blank">ЯRIK в Telegram
                                    </a></li>
                                <li><a href="https://instagram.com/yariklo9/" title="Instagram" target="_blank">ЯRIK в
                                        Instagram </a></li>
                                <!-- <li><a href="https://t.me/yaroslaw69" title="facebook" target="_blank">ЯRIK в facebook </a></li>
                        <li><a href="https://t.me/yaroslaw69" title="Youtube" target="_blank">ЯRIK в Youtube </a></li> -->
                            </ul>
                        </li>
                        <li class="mobileItem">
                            <p>ПІДТРИМКА:</p>
                            <ul class="mobMenu">
                                <li><a href="feedback.php">написати нам</a></li>
                                <li><a href="support.php">технічна підтримка</a></li>
                                <li><a href="guarantee.php">гарантія</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="headerSection">
                <div class="logo">
                    <a href="/" title="перейти на главную" class="logo">ЯRIK</a>
                </div>
            </div>
            <div class="hideMenu">
                <div class="nav">
                    <ul class="hideMenuList">
                        <li class="headerItem headerButtonMenu"><button href="product.php">КАТАЛОГ</button>
                            <ul class="subMenu">
                                <li><a href="/">новинки</a></li>
                                <li><a href="cat.php?cat=laptops">ноутбуки</a></li>
                                <li><a href="cat.php?cat=smartphones">смартфони</a></li>
                                <li><a href="cat.php?cat=mause">миші</a></li>
                                <li><a href="cat.php?cat=keyboards">клавіатури</a></li>
                                <li><a href="cat.php?cat=audio">аудіо</a></li>
                                <li><a href="cat.php?cat=gamepads">геймпади</a></li>

                            </ul>
                        </li>
                        <li class="headerItem headerButtonMenu"><button href="about.php">СПІЛКУВАННЯ</button>
                            <ul class="subMenu">
                                <li><a href="https://t.me/yaroslaw69" title="Telegram" target="_blank">ЯRIK в Telegram
                                    </a></li>
                                <li><a href="https://instagram.com/yariklo9/" title="Instagram" target="_blank">ЯRIK в
                                        Instagram </a></li>
                                <!-- <li><a href="https://t.me/yaroslaw69" title="facebook" target="_blank">ЯRIK в facebook </a></li>
                        <li><a href="https://t.me/yaroslaw69" title="Youtube" target="_blank">ЯRIK в Youtube </a></li> -->
                            </ul>
                        </li>
                        <li class="headerItem headerButtonMenu"><button href="product.php">ПІДТРИМКА</button>
                            <ul class="subMenu">
                                <li><a href="feedback.php">написати нам</a></li>
                                <li><a href="support.php">технічна підтримка</a></li>
                                <li><a href="guarantee.php">гарантія</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="headerSection">
                <?php if ($_COOKIE['email'] == '') : ?>
                <button type="button" class="headerButton RegButton" id="btnReg_open">
                    <span> регістрація</span>
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
                <button type="button" class="headerButton loginButton" id="btnLog_open">
                    <span>авторизація</span>
                    <i class="fas fa-sign-in-alt"></i>
                </button>
                <button type="button" action="search.php" class="headerButton searchButton" id="btnSrch_open">
                    <i class=" fa fa-search " aria-hidden=" true"></i>
                </button>
                <?php else : ?> <a href="exit.php" class="headerButton signouthButton" id="btnOut_open">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>

                <button type="button" action="search.php" class="headerButton searchButton" id="btnSRCH_open">
                    <i class=" fa fa-search " aria-hidden=" true"></i>
                </button>
                <?php endif; ?>

            </div>


        </div>
    </header>

    <script>
    function mobMenu() {
        var open_mobMenu = document.getElementById("mobMenubtn");
        var closeMenu = document.getElementById("closeMenu");
        var $mobileMenu = document.getElementById("mobileMenu");
        open_mobMenu.onclick = function() {
            open_mobMenu.style.display = "none";
            mobileMenu.style.display = "block";

        }

        mobileMenu.onclick = function() {
            mobileMenu.style.display = "none";
            open_mobMenu.style.display = "block";
        };

    }
    mobMenu();
    </script>

</body>

</html>