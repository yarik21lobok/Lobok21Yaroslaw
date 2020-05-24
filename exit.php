<?php
setcookie('email', $email, time() - 3600, "/");
header('Location:/');
exit();