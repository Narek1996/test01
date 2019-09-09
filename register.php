<?php
include_once("dbcon.php");

if(isset($_POST['userfio'])) {

    $userfio = $_POST['userfio'];
    $useremail = $_POST['useremail'];
    $userbirthday = $_POST['userbirthday'];
    $userpol = $_POST['userpol'];
    $userdoc = $_POST['userdoc'];
    $usedocnum = $_POST['usedocnum'];
    $userdriverdoc = $_POST['userdriverdoc'];
    $usergetinfo = $_POST['usergetinfo'];
    $today = date("Y-m-d H:i:s");

    $sql = "SELECT useremail FROM users WHERE useremail='$useremail'";
    $resultset = mysqli_query($conn, $sql) or die("Ошибка запроса к базе:". mysqli_error($conn));

    $row = mysqli_fetch_assoc($resultset);

    if(!isset($row['useremail'])){

    $sql = "INSERT INTO users(userfio, useremail, userbirthday, userpol, userdoc, usedocnum, userdriverdoc, usergetinfo, usercreatedate) 
     VALUES ('$userfio', '$useremail', '$userbirthday','$userpol', '$userdoc', '$usedocnum', '$userdriverdoc', '$usergetinfo','$today')";

        mysqli_query($conn, $sql) or die("Ошибка запроса к базе:". mysqli_error($conn)."qqq".$sql);

        echo "registered";


    } else {
        echo "1";
    }
}
