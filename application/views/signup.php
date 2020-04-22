<html>
<head>
    <title>Sign Up</title>
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
            font-size: 14px;
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
            margin-top: 75px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.4);
            background-color: #C5EFF7;
            max-width: 420px;
            max-height: 700px;
        }
        .signup-title
        {
            color: #555;
            font-size: 20px;
            font-weight: 400;
            display: block;
            font-family: monospace;
        }
        .regis
        {
            margin-left: 20px;
            margin-right: 20px;
            font-family: monospace;
            font-size: 16px;
        }
        .btn-block
        {
            font-family: monospace;
        }
        .footer
        {
          text-align: center;
          margin-top: 10px;
        }
        .batas
        {
          color: #C5EFF7;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow bg-white" style="background-color: #fff;" >
  <div class="order-1 order-md-0">
      <a class="navbar-brand" href="#"><img src="<?= base_url();?>/assets/img/logo.png" width="35px" height="35px" class="navbar-left" alt="Puntendoc"> puntendoc.com</a>
  </div>
</nav>
<div class="container account-wall">
    <div>
        <h4 class="batas">---------</h4>
        <h1 class="text-center signup-title">Selamat Datang di Puntendoc<br>Sign Up</h1>
        <div class="regis">
            <?php echo form_open('register');?>
              <div class="form-group">
                <p> Nama Lengkap:
                  <input type="text" class="form-control" autofocus name="nama" placeholder="Masukkan Nama Lengkap Anda" value="<?php echo set_value('nama'); ?>"/>
                  <?php echo form_error('nama'); ?>
                </p>
              </div>
              <div class="form-group">  
                <p> Username :
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" value="<?php echo set_value('username'); ?>"/> 
                  <?php echo form_error('username'); ?>
                </p>
              </div>
              <div class="form-group">
                <p> Email :
                  <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" value="<?php echo set_value('email'); ?>"/>
                  <?php echo form_error('email'); ?>
                </p>
              </div>
              <div class="form-group"> 
                <p> Password :
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" value="<?php echo set_value('password'); ?>"/>
                  <?php echo form_error('password'); ?>
                </p>
              </div>
              <div class="form-group">
                <p> Password Confirm :
                  <input type="password" class="form-control" name="password_conf" placeholder="Masukkan Ulang Password Anda" value="<?php echo set_value('password_conf'); ?>"/>
                  <?php echo form_error('password_conf'); ?>
                </p>
              </div>
              <input type="hidden" id="roleuser" name="role" value="user"/>
              <button class="btn btn-info btn-block" name="btn-login" id="btn-login" type="submit">Daftar</button>
              <h4 class="batas">---------</h4>
            <?php echo form_close();?>
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





<!--        
<?php
//panggil koneksi - phpdanmysql.com
include "koneksi.php";
//ketika klik daftar - phpdanmysql.com
if(isset($_POST['daftar'])){
$username=$_POST['username'];
$password=md5($_POST['password']);
$password2=md5($_POST['password2']);
$nama_lengkap=$_POST['nama_lengkap'];
$email_usr=$_POST['email_usr'];
$telp_hp=$_POST['telp_hp'];
$level=$_POST['level'];
if(empty($username)||empty($password)||empty($password2)||empty($nama_lengkap)||empty($email_usr)||empty($telp_hp))
{
echo "<script type='text/javascript'>
    onload =function(){
    alert('Data belum lengkap, silahkan periksa kembali isian form!');
    }
    </script>";
}elseif($password != $password2)
{
echo "<script type='text/javascript'>
    onload =function(){
    alert('Password Pertama dan kedua tidak sama!');
    }
    </script>";
}else{
$a="insert into user(username,password,nama_lengkap,email,telp_hp,level,status)values('$username','$password','$nama_lengkap','$email_usr','$telp_hp','$level','Y')";
$b=mysql_query($a);
if($b){
//jika berhasil akan keluar pesan dibawah ini - phpdanmysql.com
echo "<script type='text/javascript'>
    onload =function(){
    alert('Pendaftaran Berhasil, Silahkan login untuk melihat Laporan Nilia Siswa dan Laporan Abensi..!');
    }
    </script>";
}else{
echo "<script type='text/javascript'>
    onload =function(){
    alert('Data gagal disimpan!');
    }
    </script>";
}
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>
<HEAD><TITLE>phpdanmysql.com</TITLE>
<META content=True name=MSSmartTagsPreventParsing>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
</head>
<body leftmargin=0 topmargin=0 marginheight="0" marginwidth="0" bgcolor="#ffffff">

  <tr>
    <td><table width="780" border="0" cellspacing="0" cellpadding="0">
      </table>
      
      <table width="600" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#0099FF">
        <tr>
          <td width="562" valign="top"><table width="508" border="0" align="center" bgcolor="#9999FF">
            <tr>
              <td width="518"><h2 align="center">&nbsp;</h2>
                  <h2 align="center" class="style2">Pendaftaran User </h2>
                <p align="center" class="style2"><img src="belajar php dan mysql1.PNG"></p>
                <form name="form1" method="post" action="">
                    <table width="349" border="0" align="center" cellpadding="1" cellspacing="0">
                      <tr>
                        <td width="103">Username</td>
                        <td width="210"><label>
                          <input name="username" type="text" id="username">
                        </label></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td><label>
                          <input name="password" type="password" id="password">
                        </label></td>
                      </tr>
                      <tr>
                        <td>Ulangi Password </td>
                        <td><label>
                          <input name="password2" type="password" id="password2">
                        </label></td>
                      </tr>
                      <tr>
                        <td colspan="2"><hr></td>
                      </tr>
                      <tr>
                        <td>Nama Lengkap </td>
                        <td><label>
                          <input name="nama_lengkap" type="text" id="nama_lengkap" size="35">
                        </label></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><label>
                          <input name="email_usr" type="text" id="email" size="35">
                        </label></td>
                      </tr>
                      <tr>
                        <td>Telpon/HP</td>
                        <td><label>
                          <input name="telp_hp" type="text" id="telp_hp">
                        </label></td>
                      </tr>
                      <tr>
                           <td>Level</td>
                           <td><label>
                           <select name="level">
                           <option value="guru">Guru</option>
                           <option value="user">User</option>
                           </select>
                           </label></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><label>
                          <input name="daftar" type="submit" id="daftar" value="Daftar">
                          <input type="reset" name="Submit2" value="Batal">
                          <a href="index.php">Login!!</a></label></td>
                      </tr>
                      <td>&nbsp;</td>
                    </table>
                </form>
                
            </tr>
          </table></td>
</body>
</html>
-->