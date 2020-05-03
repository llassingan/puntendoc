<!DOCTYPE html>
<html lang="en">
<head>
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
	<link rel="stylesheet" href="<?=base_url(); ?>/assets/css/style.css">


</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow bg-white" style="background-color: #fff;" >

	 	<div class="order-1 order-md-0">
	        <a class="navbar-brand" href="<?php echo base_url() ?>home"><img src="<?= base_url();?>/assets/img/logo.png" width="35px" height="35px" class="navbar-left" alt="Puntendoc"> puntendoc.com</a>
	    </div>

		<div class="navbar-collapse collapse order-0 dual-collapse2" >
	        <ul class="navbar-nav mx-auto">
				<li class="nav-item" style="margin-right: 20px; margin-left: 200px;">
	                <a class="nav-link" href="<?php echo base_url() ?>artikellist">ARTIKEL</a>
	            </li>
	            <li class="nav-item" style="margin-right: 20px;">
	                <a class="nav-link" href="<?php echo base_url() ?>obatlist">OBAT</a>
	            </li>
	            <li class="nav-item" style="margin-right: 20px;">
	                <a class="nav-link" href="<?php echo base_url() ?>penyakitlist">PENYAKIT</a>
	            </li>
				<li class="nav-item" style="margin-right: 20px;">
	                <a class="nav-link" href="<?php echo base_url() ?>index.php/user/dashboard/">LANDING PAGE</a>
	            </li>
	            <li class="nav-item" style="margin-right: 20px;">
	                <a class="nav-link" href="<?php echo base_url() ?>index.php/user/dashboard/pertanyaan">TANYA DOKTER</a>
	            </li>
	        </ul>
    	</div>

    	<div class="navbar-collapse collapse order-3 dual-collapse2">
	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	                <a class="btn btn-outline-secondary" href="<?php echo base_url() ?>index.php/user/dashboard/logout">LOGOUT</a>
	            </li>
	        </ul>
	    </div>
	</nav>
