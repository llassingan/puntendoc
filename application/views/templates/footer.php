	  <!-- Site footer -->
	  <footer class="site-footer">
	  	<div class="container">
	  		<div class="row">
	  			<!-- <div class="col-sm-12 col-md-6"> -->
	  				<h6>About</h6>
	  				<p class="text-justify" style="color: #fff">PUNTENDOC adalah sebuah website konsultasi kesehatan yang mempertemukan pengguna dengan dokter. Pada PUNTENDOC, dokter yang menulis artikel kesehatan juga menjawab pertanyaan dari pengguna dalam hal persoalan kesehatan maupun tren kesehatan yang sedang berkembang di masyarakat.</p>
	  			<!-- </div> -->

	  			<!-- <div class="col-xs-6 col-md-3">
	  				<h6>Categories</h6>
	  				<ul class="footer-links">
	  					<li><a href="#">Kategori 1</a></li>
	  					<li><a href="#">Kategori 2</a></li>
	  					<li><a href="#">Kategori 3</a></li>
	  					<li><a href="#">Kategori 4</a></li>
	  					<li><a href="#">Kategori 5</a></li>
	  					<li><a href="#">Kategori 6</a></li>
	  				</ul>
	  			</div> -->

	  			<!-- <div class="col-xs-6 col-md-3">
	  				<h6>Quick Links</h6>
	  				<ul class="footer-links">
	  					<li><a href="#">About Us</a></li>
	  					<li><a href="#">Contact Us</a></li>
	  					<li><a href="#">Contribute</a></li>
	  					<li><a href="#">Privacy Policy</a></li>
	  					<li><a href="#">Sitemap</a></li>
	  				</ul>
	  			</div> -->
	  		</div>
	  		<hr>
	  	</div>
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-8 col-sm-6 col-xs-12">
	  				<p class="copyright-text" style="color: #fff">Copyright &copy; 2020 All Rights Reserved by 
	  					<a href="#" style="color: #fff">Puntendoc</a>.
	  				</p>
	  			</div>

	  			<div class="col-md-4 col-sm-6 col-xs-12">
	  				<ul class="social-icons">
	  					<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
	  					<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
	  					<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
	  					<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
	  				</ul>
	  			</div>
	  		</div>
	  	</div>
	  </footer>


	  <!-- Optional JavaScript -->
	  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/cjs/popper.min.js" integrity="sha256-SZAAW0gKAx1QbwIZt+3dTV3JSvyIHmnxA8semqGwJf0=" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.min.js" integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs=" crossorigin="anonymous"></script>
	   -->
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  <script>
		$(document).ready(function(){
		$(function() {
    	$.getJSON('assets/json/data.json',function(hasil){
        console.log(hasil);
        d="";
        for(a in hasil){
                  
				d+= "<div class='col' style='margin-top: 30px;'>"
				+"<div class='card' style='width: 16rem; height: 6rem; '>"
					+"<div class='row no-gutters'>"
						+"<div class='col-sm-2 d-flex align-items-center justify-content-center' style='margin-left: 20px;'>"
							+"<img src="+hasil[a].gambar+" class='rounded-circle' style='width: 50px; height: 50px;' alt='...'> </div>"						
						+"<div class='col-sm-8'>"
							+"<div class='card-body p-0'>"
								+"<h5 class='card-title p-0 m-0'>"+hasil[a].nama+"</h5>"
								+"<p class='card-text p-0 m-0'>"+hasil[a].gambar+"</p>"
							+"</div>"
						+"</div>"
					+"</div>"
				+"</div>"
			+"</div>"
			}
             $(d).appendTo("#kontennya");
			//document.getElementById("kontennya").innerHTML += d;
            
    });
});
});

	  </script>
	</body>
	</html>