<?php
session_start();
unset($_SESSION['nama_user']);
unset($_SESSION['username']);
session_destroy();
header("Location:../index.php");
?>