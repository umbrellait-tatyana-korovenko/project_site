<?php
setcookie('login', '', -10, '/');
setcookie('password', '', -10, '/');
header('Location: /site_with_tests/index.php');
?>