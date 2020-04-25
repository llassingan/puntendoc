<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pertanyaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow bg-white" style="background-color: #fff;" >

        <div class="order-1 order-md-0">
           <a class="navbar-brand" href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARwAAACxCAMAAAAh3/JWAAAAA1BMVEWL1P1sQkcBAAAASElEQVR4nO3BMQEAAADCoPVPbQ0PoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIALA8UNAAFusnLHAAAAAElFTkSuQmCC" width="35px" height="35px" class="navbar-left" alt="Puntendoc"> puntendoc.com</a>
       </div>
    </nav>
    <div class="container" style="padding-top: 100px;">
        <div><h1>List Pertanyaan</h1></div>
    </div>
    <div class="container" style="padding-top: 20px;">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <!-- <th scope="col"><input type="checkbox" value="option1"></th> -->
                <th scope="col">Email</th>
                <th scope="col">Pertanyaan</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <!-- <td><input type="checkbox" id="inlineCheckbox1" value="option1"></td> -->
                <td>agusbaik@gmail.com</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                <td>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Sampai</option>
                        <option value="1">Terjawab</option>
                        <!-- <option value="2">Sampai</option> -->
                        <option value="3">Diproses</option>
                      </select>
                </td>
                <td><button type="button" class="btn btn-danger">Hapus</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <!-- <td><input type="checkbox" id="inlineCheckbox1" value="option1"></td> -->
                <td>agusbaik@gmail.com</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                <td style="width: 135px;">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Sampai</option>
                        <option value="1">Terjawab</option>
                        <!-- <option value="2">Sampai</option> -->
                        <option value="3">Diproses</option>
                      </select>
                </td>
                <td><button type="button" class="btn btn-danger">Hapus</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <!-- <td><input type="checkbox" id="inlineCheckbox1" value="option1"></td> -->
                <td>agusbaik@gmail.com</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                <td>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Sampai</option>
                        <option value="1">Terjawab</option>
                        <!-- <option value="2">Sampai</option> -->
                        <option value="3">Diproses</option>
                      </select>
                </td>
                <td><button type="button" class="btn btn-danger">Hapus</button></td>
              </tr>
            </tbody>
          </table>
    </div>
</body>
<script type="text/javascript">
    $(document).ready( function () {
        $('#tablee').DataTable();
    } );
</script>
</html>