<?php
include (HTML_DIR . 'overall/header.php');
?>
<body>
    <style>
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
    </style>
    <?php include(HTML_DIR . 'overall/nav.php'); ?>
    <?php include(HTML_DIR . 'public/login.html'); ?>
    <?php include(HTML_DIR . 'public/reg.html'); ?>
    <?php include(HTML_DIR . 'public/lostpass.html'); ?>
    <br><br> <br><br> <br>
    <div class="container">




        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Bienvenido.</h1>
                <div class="account-wall">
                    <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Conectado!</strong> Bien... <a href="#" class="alert-link">Prueba</a>.
                    </div>
                    <img class="profile-img" src="views/img/user.png"
                         alt="">
<!--                    <form class="form-signin" onkeypress=" onkeypress =" return runScriptLogin(event)" >
                          <input type="text" class="form-control" placeholder="Correo"  autofocus>
                        <input type="password" class="form-control" placeholder="Clave" >
                        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="goLogin()">
                            Ingresar</button>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Recordar clave
                        </label>
                        <a class="pull-right need-help" id="modal-34423" href="#modal-container-34423" role="button" class="btn" data-toggle="modal">Necesitas Ayuda? </a><span class="clearfix"></span>
                        <?php include(HTML_DIR . 'public/login.html'); ?>
                        <?php include(HTML_DIR . 'public/reg.html'); ?>
                        <?php include(HTML_DIR . 'public/lostpass.html'); ?>
                    </form>-->
                </div>
                <a href="#" class="text-center new-account">Crear Ususario</a>
            </div>
        </div>
    </div>

    <?php
    include (HTML_DIR . 'overall/footer.php');
    ?>
</body>
</html>
