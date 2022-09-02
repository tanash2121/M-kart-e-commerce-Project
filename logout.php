<?php

session_start();
session_unset();

echo " you have logged out sucessfully";
header("location:login.php")
?>