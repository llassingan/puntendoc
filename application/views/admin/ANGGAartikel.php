
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Kelola Artikel</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url();?>/assets/img/logo.png" />
</head>
<style>
    html,body {
        padding-top: 20px;
        width: 100%;
		background-color: #87CEFA;
    }
	td,th{
		text-align:center;
	}
	#box {
		margin-top: 80px;
		margin-bottom: 20px;
		padding: 10px;
		background-color: #ebfffd;
		border-radius: 5px;
		width:80%;
	  }
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
	                <a class="nav-link" href="<?php echo base_url('index.php/cangga/pertanyaan')?>">KELOLA PERTANYAAN</a>
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

<body>
    <center>
	<div id="box" style="margin-bottom:60px;">
        <h1>Daftar Artikel</h1>
        <div class="table-responsive" > 
        <table class="table table-hover" id="tablee">
            <thead class= "thead thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Kategori</th>
				<th scope="col" >Hapus</th>
				<th scope="col" >Edit</th>
              </tr>
            </thead>
            
            <tbody>
            <?php
	                $no=0; foreach ($data as $row ) {?>
              <tr>
                <th><?php echo $no++ ?></th>
                <td><?php echo $row->judul ?></td>
                <td><?php echo $row->penulis ?></td>
                <td><?php echo $row->kategori ?></td>
				        <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('index.php/Cangga/hapusartikel/'.$row->id); ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
				        </td>
				        <td>
					      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#<?php echo $row->id ?>"><i class="fas fa-user-edit"></i></button>
				        </td>
              </tr>
			  <?php
              }
				?>
            </tbody>
            
          </table>
          </div>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahbro">ARTIKEL BARU</button>
		  	<!-- Button trigger modal -->
		  </div>
    </center>
	
	
	
	
		<!-- modal tambah -->
	
<div class="modal fade bd-example-modal-lg" id="tambahbro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>ARTIKEL BARU</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url('index.php/cangga/tambahartikel')?>">
        <div class="form-group">
          <label for="formGroupExampleInput">Judul</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul Artikel" name="judul" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Penulis</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Penulis" name="penulis" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Isi</label>
		  <textarea class="form-control" rows="10" id="formGroupExampleInput" placeholder="Isi Artikel" name="isi"required></textarea>
        </div>
        <div class="form-group"> 
        <label for="formGroupExampleInput">Kategori</label>
        <select class="form-control" id="formGroupExampleInput2" name="kategori" required>
                <option value="Kesehatan Keluarga" selected>Kesehatan Keluarga</option>
                <option value="Tren">Tren</option>
        </select>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Url Gambar</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="link"required >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div>



<?php
	$no=1; foreach ($data as $row1 ) {?>
  <div class="modal fade bd-example-modal-lg" id="<?php echo $row1->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT ARTIKEL <?php echo $row1->judul ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo base_url('index.php/cangga/editartikel')?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Id" name="idx" value="<?php echo $row1->id ?>"  required>
		 <div class="form-group">
          <label for="formGroupExampleInput">Judul Artikel</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="judul" value="<?php echo $row1->judul ?>"required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Penulis</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="penulis" value="<?php echo $row1->penulis ?>"required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Isi</label>
		  <textarea class="form-control" rows="10" id="formGroupExampleInput" placeholder="Isi Artikel" name="isi" required><?php echo $row1->isi ?></textarea>
        </div>
        <div class="form-group"> 
        <label for="formGroupExampleInput">Kategori</label>
        <select class="form-control" id="formGroupExampleInput2" name="kategori" required>
                <option value="Kesehatan Keluarga" selected>Kesehatan Keluarga</option>
                <option value="Tren">Tren</option>
        </select>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Url Gambar</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="link" value="<?php echo $row1->link ?>"required >
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
	<?php }?>
	

    <div id="footer">
	  				<p class="copyright-text" style="color: #22abc9;">Copyright &copy; 2020 All Rights Reserved by 
	  					<a href="#" style="color: #22abc9;">Puntendoc</a>.
	  				</p>
	  </div>


</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#tablee').DataTable();
    } );
  </script>
</html>