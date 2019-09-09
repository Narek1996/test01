<!DOCTYPE html>
<?include_once("dbcon.php");?>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Регистрация нового пользователя</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

<? include "menu.php"?>

<div class="container-fluid p-2">

    <section class="resume-section p-3 p-lg-2" id="about">

        <h3>Список пользователей</h3>
        <hr/>


        <div class="register_container">

            <form action="viewusers.php" class="form-signin" method="post" id="register-form">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group"><label>ФИО <b style="color: red">*</b></label>
                            <input type="text" class="form-control" name="userfio" id="userfio" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group"><label>Эл. почта  <b style="color: red">*</b></label>
                            <input type="email" class="form-control" name="useremail" id="useremail" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group"><label>Дата рождения  <b style="color: red">*</b></label>
                            <input type="text" class="form-control" name="userbirthday" id="userbirthday" />
                        </div>
                    </div>
                    </di>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <br><button type="submit" class="btn btn-default btn-info" name="btn-save" id="btn-submit"  style="font-size: 16px;background-color: #bd5d38;border-color: #bd5d38;">Поиск</button>
                        </div>
                    </div>
                </div>
            </form>
            <div id="error" > </div>


        </div>




        <table id="bootstrap-table" class="table" style="font-size: 12px;">
            <thead>

            <th>#</th>
            <th>ФИО</th>
            <th>Эл.почта</th>
            <th>дата рождения</th>
            <th>пол</th>
            <th>тип документа</th>
            <th>номер документа</th>
            <th>права</th>
            <th>ip</th>
            <th>Дата регистрации</th>


            </thead>
            <tbody>
            <?php

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
            $resultserch = "SELECT  *  from users " . $where . "  order by userid desc ";
            $resultsetserch = mysqli_query($conn, $resultserch) or die("Ошибка запроса к базе:" . mysqli_error($conn));

            while ($row = mysqli_fetch_array($resultsetserch)) {

                $userid = $row['userid'];
                $userfio = $row['userfio'];
                $useremail = $row['useremail'];
                $userbirthday = $row['userbirthday'];
                $userpol = $row['userpol'];
                $userdoc = $row['userdoc'];
                $usedocnum = $row['usedocnum'];
                $userdriverdoc = $row['userdriverdoc'];
                $usergetinfo = $row['usergetinfo'];
                $usercreatedate = $row['usercreatedate'];
                ?>
                <tr>
                    <td><?php echo $userid; ?></td>
                    <td><?php echo $userfio; ?></td>
                    <td><?php echo $useremail; ?></td>
                    <td><?php echo $userbirthday; ?></td>
                    <td><?php echo $userpol; ?></td>
                    <td><?php echo $userdoc; ?></td>
                    <td><?php echo $usedocnum; ?></td>
                    <td><?php echo $userdriverdoc; ?></td>
                    <td><?php echo $usergetinfo; ?></td>
                    <td><?php echo $usercreatedate; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </section>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>

</body>

</html>
