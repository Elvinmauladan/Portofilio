<?php
include 'koneksi.php';

if(isset($_POST['proses'])){
  mysqli_query($connect,"insert into profil set
  gambarp = '$_POST[gambarr]',
  namap ='$_POST[namaa]',
  visip ='$_POST[visii]'");

  echo "Data telah terubah";
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>             
    <a href="home.php" class="btn btn-primary float-right">Back to Portofolio</a>
    <div class="container">
            <div class="row text-center">
              <div class="col fs-3">Edit Profil</div>
 
            </div>
            
          <div class="row justify-content-center">
            <div class="col-md-7">
              <form action="" method="post">
  
                <div class="mb-3">
                  <label for="gambar" class="form-label">Gambar</label>
                  <input type="text" class="form-control" name="gambarr">
                </div>
  
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="namaa">
                </div>
  
                <div class="mb-3">
                  <label for="pesan" class="form-label">Visi</label>
                  <input type="text" class="form-control" name="visii">
                </div>
  
                <input type="submit" value="simpan" name="proses" class="btn btn-dark">
              </form>
            </div>
          </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>