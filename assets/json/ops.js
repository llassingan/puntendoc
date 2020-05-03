
    	$.getJSON('http://localhost/PUNTENDOC/assets/json/data.json',function(hasil){
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
            document.getElementById("kontennya").innerHTML += d;
            
    });
