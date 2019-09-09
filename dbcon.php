<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usersreg";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Что то пошло не так ..." . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Я не подключен: %s\n", mysqli_connect_error());
    exit();
}

