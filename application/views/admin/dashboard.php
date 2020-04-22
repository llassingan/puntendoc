<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<!--navbar
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Puntendoc</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/admin/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
    </nav>
-->
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-15">
          <div>
            <div class="panel panel-default row">
              <div align="center" class="panel-body">
                <p>Selamat Datang <b><?php echo ucfirst($this->session->userdata('nama')); ?></b> di Halaman Admin
                </p>
              </div>
            </div>
          </div>
          <div class="list-group row">
            <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
               ADMIN
            </a>
            <a href="#" class="list-group-item"><i class="fa fa-home"></i>Home</a>
            <a href="dashboard.php" class="list-group-item"><i class="fa fa-dashboard"></i>Dashboard</a>
            <a href="#" class="list-group-item"><i class="fa fa-artikel"></i>Artikel</a>
            <a href="#" class="list-group-item"><i class="fa fa-tanya"></i>Pertanyaan</a>
            <a href="#" class="list-group-item"><i class="fa fa-penyakit"></i>Info Penyakit</a>
            <a href="#" class="list-group-item"><i class="fa fa-obat"></i>Info Obat</a>
            <a href="#" class="list-group-item"><i class="fa fa-logout"></i>Logout</a>
          </div>
      </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>