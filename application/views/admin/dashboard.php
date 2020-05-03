<!DOCTYPE html>
<html>
<head>
    <title> Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- set title and icon -->
  <title><?php echo $judul ?></title>
  <link rel="icon" type="image/x-icon" href="<?= base_url();?>/assets/img/logo.png" />


  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- My CSS -->
  <style>
  #footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #fff;
  color: white;

  text-align: center;
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow bg-white" style="background-color: #fff;" >

<div class="order-1 order-md-0">
   <a class="navbar-brand" href="<?php echo base_url() ?>home"><img src="<?= base_url();?>/assets/img/logo.png" width="35px" height="35px" class="navbar-left" alt="Puntendoc"> puntendoc.com</a>
</div>

<div class="navbar-collapse collapse order-0 dual-collapse2" >
   <ul class="navbar-nav mx-auto">
 <li class="nav-item" style="margin-right: 20px; margin-left: 200px;">
           <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/dashboard">LANDING PAGE</a>
       </li>
       <li class="nav-item" style="margin-right: 20px;">
           <a class="nav-link" href="<?php echo base_url('index.php/cangga/artikel')?>">KELOLA ARTIKEL</a>
       </li>
       <li class="nav-item" style="margin-right: 20px;">
           <a class="nav-link" href="<?php echo base_url('index.php/cangga/')?>">KELOLA OBAT</a>
       </li>
       <li class="nav-item" style="margin-right: 20px;">
           <a class="nav-link" href="<?php echo base_url('index.php/cangga/penyakit')?>">KELOLA PENYAKIT</a>
       </li>
     <li class="nav-item" style="margin-right: 20px;">
           <a class="nav-link" href="#">KELOLA PERTANYAAN</a>
       </li>
   </ul>
</div>

<div class="navbar-collapse collapse order-3 dual-collapse2">
   <ul class="navbar-nav ml-auto">
       <li class="nav-item">
           <a class="btn btn-outline-secondary" href="<?php echo base_url() ?>index.php/admin/dashboard/logout">LOG OUT</a>
       </li>
   </ul>
</div>
</nav>

<div class="container">
    <div id="kiri" style="width:50%; height:500px; float:left; margin-top: 60px">
        <object data="your-svg-image.svg" type="image/svg+xml"> 
        <img src="<?= base_url();?>/assets/img/doct.png">
        </object>
    </div>
    <div id="kanan" style="width:50%; height: 500px;float:right; margin-top: 60px">
        <h1 style="text-align: center; margin-top: 180px; font-size: 4em">Selamat Datang <b>Dokter <?php echo $this->session->userdata("user_nama") ?></b> !</h1>
    </div>
</div>

    <!-- Site footer -->
    <div id="footer">
	  				<p class="copyright-text" style="color: #22abc9;">Copyright &copy; 2020 All Rights Reserved by 
	  					<a href="#" style="color: #22abc9;">Puntendoc</a>.
	  				</p>
	  </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>