<?php
include_once("dbcon.php");

if(isset($_POST['btn-save'])) {

    $userfioserch = $_POST['userfio'];
    $useremailserch = $_POST['useremail'];
    $userbirthdayserch = $_POST['userbirthday'];


    $arr = array();
    if (!empty($userfioserch))
    {
        $arr["userfio"] = " userfio LIKE '%$userfioserch%'";
    }
    if (!empty($useremailserch))
    {
        $arr["useremail"] = " useremail LIKE '%$useremailserch%' ";
    }
    if (!empty($userbirthdayserch))
    {
        $arr["userbirthday"] = " userbirthday like '%$userbirthdayserch%' ";
    }

    if(empty($userfioserch)&&empty($useremailserch)&&empty($userbirthdayserch)){
        $zapros = "";
    }else {
        $zapros = " WHERE ";
    }
    $where = $zapros . implode(" AND ", $arr);
    $resultserch = "SELECT  *  from users " . $where;
    $resultsetserch = mysqli_query($conn, $resultserch) or die("Ошибка запроса к базе:" . mysqli_error($conn));

    echo "registered";
} else {
    echo "1";
}



