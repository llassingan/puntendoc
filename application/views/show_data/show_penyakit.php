<section class="section-penyakit" style="margin-top: 40px; margin-bottom: 40px;">

	<div class="container">

		<?php

		foreach ($dataPenyakit as $penyakit) { 
			echo '<a class="row no-gutters" href="'. base_url(). 'penyakitdetail/'. $penyakit['id'] .'">';
			echo '<div class="col-sm-2 d-flex align-items-center justify-content-center p-0 m-0" >';
			echo '<img src='. $penyakit['link'] .' style="width: 100%; height:180px;" alt="...">';
			echo '</div>';
			echo '<div class="col-md-8">';
			echo '<div class="card-body p-0" style="padding: 20px;">';
			echo '<h5 class="card-title">' . $penyakit['nama'] . '</h5>';
			echo '<p class="card-text isi-artikel">'. $penyakit['gejala'] .'</p>';			
			echo '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
			echo '</div></div></a>';
			echo '</br>';
		}

		?>

	</div>
</section>