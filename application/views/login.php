<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $judul ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url();?>/assets/images/logo.png" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url(); ?>/assets/css/style.css">
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
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            box-sizing: border-box;
            font-family: monospace;
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
            margin-top: 100px;
            padding: 20px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.4);
            background-color: #C5EFF7;
            max-width: 350px;
        }
        .login-title
        {
            color: #555;
            font-size: 20px;
            font-weight: 400;
            display: block;
            font-family: monospace;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
            font-family: monospace;
        }
        .btn-block
        {
            font-family: monospace;
        }

        .akun
        {
            text-align: right;
        }
        .footer
        {
          text-align: center;
          margin-top: 10px;
          margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow bg-white" style="background-color: #fff;" >
        <div class="order-1 order-md-0">
            <a class="navbar-brand" href="<?php echo base_url() ?>home"><img src="<?= base_url();?>/assets/img/logo.png" width="35px" height="35px" class="navbar-left" alt="Puntendoc"> puntendoc.com</a>
        </div>
    </nav>
<div class="container account-wall">
    <div>
        <div>
            <h1 class="text-center login-title">Selamat Datang di Puntendoc<br><br>Login</h1>
            <?php if(isset($error)) { echo $error; }; ?>
            <div>
                <form class="form-signin" method="POST" action="<?php echo base_url() ?>index.php/login">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                    <?php echo form_error('username'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php echo form_error('password'); ?>
                </div>
                <button class="btn btn-lg btn-info btn-block" name="btn-login" id="btn-login" type="submit">
                    Masuk</button><br>
                <p style="text-align: center; font-family: monospace; font-size: 15px;" class="akun">Belum Punya Akun? <?php echo anchor('signup','Buat Akun');?></p>
            </div>
                <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>

<div class="footer">
<?php echo "Copyright © " . (int)date('Y') . " Puntendoc."; ?>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
</body>
</html>