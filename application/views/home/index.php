<div id="topCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#topCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#topCarousel" data-slide-to="1"></li>
		<li data-target="#topCarousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">


		<div class="carousel-item active">
			<img src="<?=base_url(); ?>/assets/img/car3.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h3 style="color : #1118a8; font-weight:bold;" >Puntendoc</h3>
				<p style="color : #1118a8;  font-weight:500;">Solusi Kesehatanmu</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?=base_url(); ?>/assets/img/car1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			<h3 style="color : #1118a8; font-weight:bold;" >Puntendoc</h3>
			<p style="color : #1118a8;  font-weight:500;">Solusi Kesehatanmu</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?=base_url(); ?>/assets/img/car2.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			<h3 style="color : #1118a8; font-weight:bold;" >Puntendoc</h3>
			<p style="color : #1118a8;  font-weight:500;">Solusi Kesehatanmu</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#topCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#topCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

</div>

<section class="section-dokter">
	<div class="container" style="margin-top: 40px;">
	<h3>Tim Dokter Kami</h3>
		<div class="row row-cols-6 align-items-center justify-content-center" id="kontennya" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="assets/json/ops.js"></script> -->
	<script>

$(function() {

	$.getJSON('assets/json/data.json',function(hasil){
        console.log(hasil);
        d="";
        for(a in hasil){
                  
			 d+=  //"<div class='col' style='margin-top: 30px;'>"
			// 	+"<div class='card' style='width: 16rem; height: 6rem; '>"
			// 		+"<div class='row no-gutters'>"
			// 			+"<div class='col-sm-2 d-flex align-items-center justify-content-center' style='margin-left: 20px;'>"
			// 				+"<img src="+hasil[a].gambar+" class='rounded-circle' style='width: 50px; height: 50px;' alt='...'> </div>"						
			// 			+"<div class='col-sm-8'>"
			// 				+"<div class='card-body p-0'>"
			// 					+"<h5 class='card-title p-0 m-0'>"+hasil[a].nama+"</h5>"
			// 					+"<p class='card-text p-0 m-0'>"+hasil[a].spesialis+"</p>"
			// 				+"</div>"
			// 			+"</div>"
			// 		+"</div>"
			// 	+"</div>"
			// +"</div>"

			"<div class='card' style='width: 19rem; margin-right:10px; margin-bottom:15px; margin-top:15px;'>"
  +"<img class='card-img-top' src="+hasil[a].gambar+" alt='Dokter 100%x280' style='width: 100%; height: 280px;' >"
  +"<div class='card-body'>"
    +"<h5 class='card-title p-0 m-0'>"+hasil[a].nama+"</h5>"
    +"<p class='card-text p-0 m-0'>"+hasil[a].spesialis+"</p>"
  +"</div>"
+"</div> "

			}
            document.getElementById("kontennya").innerHTML += d;
            
    });
});

	  </script>
		</div>
		<hr style=" margin-top: 40px;">
	</div>

</section>

<section class="section-obat">
	<div class="container" style="margin-top: 20px;">
		<?php 

		for ($i=0; $i < 11 && $i < sizeof($dataObat); $i++) { 

			if ($i % 6 == 0 && $i == 0) {
				echo '<div class="row no-gutters" >';
			} elseif ($i % 6 == 0 && $i != 0){
				echo '</div><div class="row no-gutters" >';
			}
			
			echo '<a class="col-sm-2" href="'. base_url(). 'obatdetail/'. $dataObat[$i]['id'] .'">';
			echo '<div class="row text-center">';
			echo '<div class="card-body border-bottom shadow-sm p-3 bg-white">';
			echo '<h6 class="card-subtitle mb-2 text-muted p-0 m-0"><img src='. $dataObat[$i]['link'] .' style="width: 100%; height: 120px;"></h6>';
			echo '<p class="card-text">'. $dataObat[$i]['nama'] . '</p>';
			echo '</div></div>';
			echo '</a>';
		}

		?>

			<div class="col" style="margin-top: 50px;">
				<a href="<?php echo base_url() ?>obatlist">
					<div class="card align-items-center justify-content-center" style="width: 10rem; height: 8rem; ">
						<div class="row no-gutters align-items-center justify-content-center">
							<div class="col-sm-2 d-flex align-items-center justify-content-center" style="margin-left: 20px;">
								<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQRqR8HpOZMZwoJGqhadBSizby6q25ZLA8uPOY0V9l64NxD3mLu&usqp=CAU" class="rounded-circle" style="width: 50px; height: 50px;" alt="...">
							</div>
							<div class="col-sm-8">
								<div class="card-body p-0">
									<h5 class="card-title p-0 m-0">Lihat Obat lainnya >></h5>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
	</div>
</section>


<section class="section-penyakit pt-5 pb-5" style="background-color: #f5f5f5">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<a href="<?php echo base_url() ?>penyakitlist"><h3 class="mb-3">Info Penyakit</h3></a>
			</div>
			<div class="col-6 text-right">
				<a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
					<i class="fa fa-arrow-left"></i>
				</a>
				<a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
					<i class="fa fa-arrow-right"></i>
				</a>
			</div>
			<div class="col-12">
				<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner">


						<?php 

						for ($i=0; $i < sizeof($dataPenyakit) ; $i++) { 

							if ($i == 0){
								echo '<div class="carousel-item active">';
								echo '<div class="row">';
							} else if ($i % 3 == 0 && $i != 0) {
								echo '</div></div><div class="carousel-item">';
								echo '<div class="row">';
							}

							echo '<a class="col-md-4 mb-3" href="'. base_url(). 'penyakitdetail/'. $dataPenyakit[$i]['id'] .'">';
							echo '<div class="card">';
							echo '<img class="img-fluid" alt="100%x280" src='.$dataPenyakit[$i]['link'].' style="width: 100%; height: 280px;">';
							echo '<div class="card-body">';
							echo '<h4 class="card-title">' . $dataPenyakit[$i]['nama'] . '</h4>';
							echo '</div></div></a>';

							if ($i == sizeof($dataPenyakit)-1){
								echo '</div></div>';
							}

						}

						?> 


						<!-- <div class="carousel-item active">
							<div class="row">
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
										<div class="card-body">
											<h4 class="card-title">Special title treatment</h4>
											<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
										<div class="card-body">
											<h4 class="card-title">Special title treatment</h4>
											<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

										</div>
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
										<div class="card-body">
											<h4 class="card-title">Special title treatment</h4>
											<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">

								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
										<div class="card-body">
											<h4 class="card-title">Special title treatment</h4>
											<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

										</div>

									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
										<div class="card-body">
											<h4 class="card-title">Special title treatment</h4>
											<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

										</div>
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="card">
										<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
										<div class="card-body">
											<h4 class="card-title">Special title treatment</h4>
											<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

										</div>
									</div>
								</div>

							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section-artikel" style="margin-top: 40px; margin-bottom: 40px;">

	<div class="container">
		<a href="<?php echo base_url() ?>artikellist"><h3 style=" margin-bottom: 20px;">Artikel</h3></a>


		<?php

		foreach ($dataArtikel as $artikel) { 
			echo '<a href="'. base_url(). 'artikeldetail/'. $artikel['id'] .'" class="row no-gutters">';
			echo '<div class="col-sm-2 d-flex align-items-center justify-content-center p-0 m-0" >';
			echo '<img src='. $artikel['link'] .' style="width: 100%;" alt="...">';
			echo '</div>';
			echo '<div class="col-md-8">';
			echo '<div class="card-body p-0" style="padding: 20px;">';
			echo '<span class="badge badge-success mb-3">'.$artikel['kategori'].'</span>';
			echo '<h5 class="card-title">' . $artikel['judul'] . '</h5>';
			echo '<p class="card-text isi-artikel">'. $artikel['isi'] .'</p>';			
			echo '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
			echo '</div></div></a>';
			echo '</br>';
		}

		?>

	</div>

</section>