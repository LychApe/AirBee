<?php
session_start();
session_unset($_SESSION['username'],$_SESSION['password']);
session_destroy();
echo "<script>alert('已经退出登陆');parent.location.href='index.php';</script>";
?>