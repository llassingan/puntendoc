<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pertanyaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow bg-white" style="background-color: #fff;" >

        <div class="order-1 order-md-0">
           <a class="navbar-brand" href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARwAAACxCAMAAAAh3/JWAAAAA1BMVEWL1P1sQkcBAAAASElEQVR4nO3BMQEAAADCoPVPbQ0PoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIALA8UNAAFusnLHAAAAAElFTkSuQmCC" width="35px" height="35px" class="navbar-left" alt="Puntendoc"> puntendoc.com</a>
       </div>

       <div class="navbar-collapse collapse order-0 dual-collapse2" >
           <ul class="navbar-nav mx-auto">
               <li class="nav-item" style="margin-right: 20px; margin-left: 200px;">
                   <a class="nav-link" href="#">ARTIKEL</a>
               </li>
               <li class="nav-item" style="margin-right: 20px;">
                   <a class="nav-link" href="#">DIREKTORI</a>
               </li>
               <li class="nav-item" style="margin-right: 20px;">
                   <a class="nav-link" href="#">INFO KESEHATAN</a>
               </li>
               <li class="nav-item" style="margin-right: 20px;">
                   <a class="nav-link" href="#">FORUM</a>
               </li>
               <li class="nav-item" style="margin-right: 20px;">
                   <a class="nav-link" href="#">EVENT</a>
               </li>
               <li class="nav-item" style="margin-right: 20px;">
                   <a class="nav-link" href="#">BUKU KESEHATAN</a>
               </li>
           </ul>
       </div>
   </nav>
   
   
    <!-- <div class="container" style="padding-top: 100px;">
        <div class="card mb-3" style="border-color: #C5EFF7; background-color: #C5EFF7;" >
            <div class="card-header" style="font-size: 36px;">Buat Pertanyaan</div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                      <label for="inputEmail">Email</label>
                      <input type="email" class="form-control" id="inputEmail" aria-describedby="emailPertanyaan">
                      <small id="emailPertanyaan" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="isiPertanyaan">Pertanyaan</label>
                      <input type="text" class="form-control" id="isiPertanyaan">
                    </div> -->
                    <!-- <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <!-- <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div> -->
    <div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Buat Pertanyaan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small id="emailPertanyaan" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan</label>
                            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan">
                            <small class="form-text text-danger"><?= form_error('pertanyaan') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 
</body>
</html>