<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\GitHub\bjguomai\public/../application/admin\view\login\login.html";i:1530453737;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>TrainingSystem</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="/static/admin//style/jquery.js"></script>
    <script src="/static/admin//style/jquery_002.js"></script>
    <!--Basic Styles-->
    <link href="/static/admin//style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin//style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet">
    <link href="/static/admin//style/demo.css" rel="stylesheet">
    <link href="/static/admin//style/animate.css" rel="stylesheet">
    <link rel="shortcut icon" href="/static/admin//images/ts.png" type="image/x-icon" />
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="" name="code" type="text" style="width: 80px;float: left">
                    <img src="<?php echo captcha_src(); ?>" alt="" onclick="src='<?php echo captcha_src(); ?>?'+Math.random()" style="cursor:pointer;width: 130px;float: left;margin-left: 10px;height: 34px">
                </div>
                <div class="loginbox-submit" style="margin-top: 30px">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <!--<div class="logobox">-->
                    <!--&lt;!&ndash;<p class="text-center"></p>&ndash;&gt;-->
                <!--</div>-->
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="/static/admin//style/bootstrap.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin//style/beyond.js"></script>




</body><!--Body Ends-->
</html>