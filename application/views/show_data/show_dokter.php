<section class="section-dokter">
	<div class="container" style="margin-top: 40px;">
		<div class="row row-cols-4">

			<?php
			for ($i=0; $i < sizeof($dataDokter); $i++) { 
				echo '<a href="'. base_url(). 'dokterdetail/'. $dataDokter[$i]['id'] .'" class="col" style="margin-top: 30px;">';
				echo '<div class="card" style="width: 16rem; height: 6rem; ">';
				echo '<div class="row no-gutters">';
				echo '<div class="col-sm-2 d-flex align-items-center justify-content-center" style="margin-left: 20px;">';
				echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS6WT2yY9kTYrktLoGuubV5RrFfbVoT3tOA5y68x01UEXJMfzyI&usqp=CAU" class="rounded-circle" style="width: 50px; height: 50px;" alt="...">';
				echo '</div>';
				echo '<div class="col-sm-8">';
				echo '<div class="card-body p-0">';
				echo '<h5 class="card-title p-0 m-0">'. $dataDokter[$i]['nama'] .'</h5>';
				echo '<p class="card-text p-0 m-0">'. $dataDokter[$i]['deskripsi'] .'</p>';
				echo '</div></div></div></div></a>';
			}
			?>

			<!-- <div class="col" style="margin-top: 30px;">
				<div class="card" style="width: 16rem; height: 6rem; ">
					<div class="row no-gutters">
						<div class="col-sm-2 d-flex align-items-center justify-content-center" style="margin-left: 20px;">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS6WT2yY9kTYrktLoGuubV5RrFfbVoT3tOA5y68x01UEXJMfzyI&usqp=CAU" class="rounded-circle" style="width: 50px; height: 50px;" alt="...">
						</div>
						<div class="col-sm-8">
							<div class="card-body p-0">
								<h5 class="card-title p-0 m-0">Dokter</h5>
								<p class="card-text p-0 m-0">Deskripsi</p>
							</div>
						</div>
					</div>
				</div>
			</div> -->

	</div>

</section>
