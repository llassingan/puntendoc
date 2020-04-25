<section class="section-penyakit" style="margin-top: 40px; margin-bottom: 40px;">

	<div class="container">

		<?php

		foreach ($dataPenyakit as $penyakit) { 
			echo '<a class="row no-gutters" href="'. base_url(). 'penyakitdetail/'. $penyakit['id'] .'">';
			echo '<div class="col-sm-2 d-flex align-items-center justify-content-center p-0 m-0" >';
			echo '<img src="https://static.guesehat.com/static/article_thumb/apa_itu_twin_flame_-_guesehatcom_1585722853.jpg" style="width: 100%;" alt="...">';
			echo '</div>';
			echo '<div class="col-md-8">';
			echo '<div class="card-body p-0" style="padding: 20px;">';
			echo '<span class="badge badge-success mb-3">Kategori</span>';
			echo '<h5 class="card-title">' . $penyakit['nama'] . '</h5>';
			echo '<p class="card-text isi-artikel">'. $penyakit['gejala'] .'</p>';			
			echo '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
			echo '</div></div></a>';
		}

		?>

	</div>
</section>