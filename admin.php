<?php
include 'koneksi.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
      <br>
      <a href="home.php" class="btn btn-primary float-right">Back to Portofolio</a>
      <center><h1>Admin</h1></center>


<div class="container">
        <div class="row align-items-start">
          <div class="col-md-4">
            <div class="card mt-3">
             <div class="card-header bg-primary text-white">
                        Edit Portofolio
             </div>
             <div class="card-body">
             <table class=" table table-borderer table-striped">
                 <tr>
                     <th>Name</th>
                     <th>Action</th>
                 </tr>
                 <tr>
                     <th>Profil</th>
                     <th>
                         <a href="editprofil.php" class="btn btn-warning">Edit</a>
                     </th>
                 </tr>
             </table>
          </div>
        </div>
        </div>



          <div class="col-8">
               <div class="card mt-3">
             <div class="card-header bg-primary text-white">
                     Daftar Pengguna
            </div>
           <div class="card-body">
               <table class="table table-borderer table-striped">
                   <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Pesan</th>
                      <th>Action</th>
                    </tr>
                    <?php
                        $no = 1;
                        $tampil = mysqli_query($connect, "SELECT * from kontak order by id_k desc");
                        while($data = mysqli_fetch_array($tampil)) :

                    ?>
                    <tr>
                        <th><?=$no++?></th>
                        <th><?=$data['nama']?></th>
                        <th><?=$data['email']?></th>
                        <th><?=$data['pesan']?></th>
                        <th>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </th>
                        </tr>
                        <?php endwhile; ?>
                </table>
            </div>
            </div>
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