<?php
session_start();
require "inc/lib.inc.php";
$name=$_SESSION['name'];
last_visiting($connect,$name);
unset($_SESSION['name']);
header("Location:{$_SERVER['HTTP_REFERER']}");
?>