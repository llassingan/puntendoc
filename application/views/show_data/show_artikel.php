<section class="section-artikel" style="margin-top: 40px; margin-bottom: 40px;">

	<div class="container">
		<h3 style=" margin-bottom: 20px;">Artikel</h3>


		<?php

		foreach ($dataArtikel as $artikel) { 
			echo '<a href="'. base_url(). 'artikeldetail/'. $artikel['id'] .'" class="row no-gutters">';
			echo '<div class="col-sm-2 d-flex align-items-center justify-content-center p-0 m-0" >';
			echo '<img src="https://static.guesehat.com/static/article_thumb/apa_itu_twin_flame_-_guesehatcom_1585722853.jpg" style="width: 100%;" alt="...">';
			echo '</div>';
			echo '<div class="col-md-8">';
			echo '<div class="card-body p-0" style="padding: 20px;">';
			echo '<span class="badge badge-success mb-3">Kategori</span>';
			echo '<h5 class="card-title">' . $artikel['judul'] . '</h5>';
			echo '<p class="card-text isi-artikel">'. $artikel['isi'] .'</p>';			
			echo '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
			echo '</div></div></a>';
			echo '</br>';
		}

		?>


		<!-- <div class="row no-gutters">
			<div class="col-sm-2 d-flex align-items-center justify-content-center p-0 m-0" >
				<img src="https://static.guesehat.com/static/article_thumb/apa_itu_twin_flame_-_guesehatcom_1585722853.jpg" style="width: 100%;" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body p-0" style="padding: 20px;">
					<span class="badge badge-success mb-3">Kategori</span>
					<h5 class="card-title">Judul Artikel</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>


		<div class="row no-gutters">
			<div class="col-sm-2 d-flex align-items-center justify-content-center p-0 m-0" >
				<img src="https://static.guesehat.com/static/article_thumb/apa_itu_twin_flame_-_guesehatcom_1585722853.jpg" style="width: 100%;" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body p-0" style="padding: 20px;">
					<span class="badge badge-success mb-3">Kategori</span>
					<h5 class="card-title">Judul Artikel</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div> -->


	</div>
</section>