<!DOCTYPE html>
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

<h3>Регистрация нового пользователя</h3>
<hr/>

<div class="register_container">

<form class="form-signin" method="post" id="register-form">


<div class="row">
<div class="col-md-12">
<div class="form-group"><label>ФИО <b style="color: red">*</b></label>
<input type="text" class="form-control" name="userfio" id="userfio" />
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group"><label>Эл. почта  <b style="color: red">*</b></label>
<input type="email" class="form-control" name="useremail" id="useremail" />
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group"><label>Дата рождения  <b style="color: red">*</b></label>
<input type="text" class="form-control js-date" name="userbirthday" id="userbirthday" maxlength="10" />
</div>
</div>

<div class="col-md-6">
<div class="form-group"><label>Пол</label>
<select class="form-control" name="userpol">
    <option value="Мужской">Мужской</option>
    <option value="Женский">Женский</option>
    <option value="Би">Би</option>
</select>
</div>
</div>
</div>

    <hr/>

<div class="row">
<div class="col-md-4">
<div class="form-group"><label>Тип документа  </label>
<select class="form-control" name="userdoc">
<option value="Паспорт РФ">Паспорт РФ</option>
<option value="Паспорт РБ">Паспорт РБ</option>
<option value="Водительское удостоверение">Водительское удостоверение</option>
<option value="Свидетельство о рождении">Свидетельство о рождении</option>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group"><label>Номер документа </label>
<input type="text" class="form-control" name="usedocnum" id="usedocnum" />
</div>
</div>

<div class="col-md-4">
<div class="form-group"><label>Права</label>
            <select class="form-control" name="userdriverdoc">
                <option value="Доступ к разделу А">Доступ к разделу А</option>
                <option value="Доступ к разделу Б">Доступ к разделу Б</option>
                <option value="Доступ к разделу В">Доступ к разделу В</option>
            </select>
        </div>
    </div>

</div>

<hr/>

<div class="row">
<div class="col-md-12">
<div class="form-group"><label>IP адрес и браузер добавившего</label>

    <?
    $ip =  $_SERVER['REMOTE_ADDR'] ;
    $browser = $_SERVER['HTTP_USER_AGENT'] ;
    $info = $ip ." -//- ". $browser ;
    ?>
<input type="text" class="form-control" name="usergetinfo" id="usergetinfo" value="<?echo $info;?>"  readonly/>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<br><button type="submit" class="btn btn-default btn-info" name="btn-save" id="btn-submit"  style="font-size: 16px;background-color: #bd5d38;border-color: #bd5d38;">Регистрация</button>
</div>
</div>
</div>

<div id="error" > </div>
</form>
</div>

</section>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>

<script>

    var input = document.querySelectorAll('.js-date')[0];

    var dateInputMask = function dateInputMask(elm) {
        elm.addEventListener('keypress', function(e) {
            if(e.keyCode < 47 || e.keyCode > 57) {
                e.preventDefault();
            }

            var len = elm.value.length;

            // If we're at a particular place, let the user type the slash
            // i.e., 12/12/1212
            if(len !== 1 || len !== 3) {
                if(e.keyCode == 47) {
                    e.preventDefault();
                }
            }

            // If they don't add the slash, do it for them...
            if(len === 2) {
                elm.value += '.';
            }

            // If they don't add the slash, do it for them...
            if(len === 5) {
                elm.value += '.';
            }
        });
    };

    dateInputMask(input);


    $('document').ready(function() {
        /* handle form validation */
        $("#register-form").validate({
            rules: {
                userfio: {
                    required: true,
                    minlength: 3
                },
                useremail: {
                    required: true,
                    email: true
                },
                userbirthday: {
                    required: true,
                    minlength: 5
                },
            },
            messages:
                {
                    userfio: "<b style='color: maroon'>Данные не введены</b>",
                    useremail: "<b style='color: maroon'>Введите правильно адрес эл.почты</b>",
                    userbirthday: "<b style='color: maroon'>Введите дату рождения</b>",
                },
            submitHandler: submitForm
        });

        function submitForm() {
            var data = $("#register-form").serialize();
            $.ajax({
                type : 'POST',
                url : 'register.php',
                data : data,
beforeSend: function() {
$("#error").fadeOut();
$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   Проверка ...');
},
success : function(response) {
if(response==1){
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Простите, но этот эл.адрес уже используется.</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Регистрация');
});
} else if(response=="registered"){
$("#error").fadeIn(500, function(){
$("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span>Пользователь зарегистрирован.</div>');
$("#btn-submit").html('<img src="ajax-loader.gif" />   Сохранение ...');
setTimeout('$(".form-signin").fadeOut(500, function(){ window.location.href = "viewusers.php"; }); ',2000);
});} else {
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> УПС !</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Регистрация');
});
}
}
});
return false;
}
});
</script>
</body>

</html>
