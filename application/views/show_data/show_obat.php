
<section class="section-obat">
	<div class="container" style="margin-top: 20px;">
		<?php 

		for ($i=0; $i < sizeof($dataObat); $i++) { 

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

			if ($i == sizeof($dataObat)-1){
				echo "</div>";
			}
		}

		?>

	</div>
</section>