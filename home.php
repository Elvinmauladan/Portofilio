<?php
include 'koneksi.php';

if(isset($_POST['proses'])){
  mysqli_query($connect,"insert into kontak set
  nama = '$_POST[namaa]',
  email ='$_POST[emaill]',
  pesan ='$_POST[pesann]'");

  echo "Data telah tersimpan";
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand ps-2" href="admin.php">Portofolio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#galery">Galery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Kontak">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>      

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L30,138.7C60,149,120,171,180,154.7C240,139,300,85,360,69.3C420,53,480,75,540,74.7C600,75,660,53,720,74.7C780,96,840,160,900,186.7C960,213,1020,203,1080,192C1140,181,1200,171,1260,165.3C1320,160,1380,160,1410,160L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>



      <?php
        $tampil = mysqli_query($connect, "SELECT * FROM profil order by id_p Desc");
        while($data = mysqli_fetch_array($tampil)) :


      ?>
      <div class="jumbotron text-center">
        <img src="<?=$data['gambarp']?>" class="img-thumbnail rounded-circle" alt="foto profil" name="imgp">
        <h1 class="display-4" name="namap"><?=$data['namap']?></h1>
        <p class="lead"  name="visip"><?=$data['visip']?></p>
      </div>
      <?php endwhile; ?>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L30,138.7C60,149,120,171,180,154.7C240,139,300,85,360,69.3C420,53,480,75,540,74.7C600,75,660,53,720,74.7C780,96,840,160,900,186.7C960,213,1020,203,1080,192C1140,181,1200,171,1260,165.3C1320,160,1380,160,1410,160L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>

      <section id="about">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,160L30,149.3C60,139,120,117,180,101.3C240,85,300,75,360,96C420,117,480,171,540,186.7C600,203,660,181,720,176C780,171,840,181,900,170.7C960,160,1020,128,1080,138.7C1140,149,1200,203,1260,197.3C1320,192,1380,128,1410,96L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
        <div class="container">
          <div class="row text-center mt-5">
            <div class="col fs-3">About Me</div>
          </div>
          <div class="row text-justify pt-4 justify-content-center">
            <div class="col-md-5 fs-5 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam omnis harum voluptatum dolorem culpa unde eaque dicta, laudantium necessitatibus nam, maiores nesciunt. Quod, perspiciatis reiciendis.</div>
  
            <div class="col-md-5 fs-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed nihil exercitationem corrupti temporibus soluta iure ex hic quia tenetur? Unde impedit optio consequatur asperiores aspernatur?</div>
          </div>
        </div>
      </section>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,85.3C384,96,480,160,576,202.7C672,245,768,267,864,272C960,277,1056,267,1152,266.7C1248,267,1344,277,1392,282.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

      <section id="galery">
        
        <div class="container-fluid text-center py-5" style="color: rgb(101, 101, 105); background-color: #273036; width: auto;">
          <div class="row text-center">
            <div class="col fs-3" style="color: white;">Galery</div>
          </div>
          <div class="row pt-5">
              <div class="col-md-4 mb-3">
                  <div class="card">
                      <img src="foto.jpg" alt="" height="270px"/>   
                      <div class="card-body">
                          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, maiores.</p>
                      </div>     
                  </div>
              </div>
              <div class="col-md-4 mb-3">
                  <div class="card">
                      <img src="foto.jpg" alt="" height="270px" />   
                      <div class="card-body">
                          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, maiores.</p>
                      </div>     
                  </div>
              </div>
              <div class="col-md-4 mb-3">
                  <div class="card">
                      <img src="foto.jpg" alt=""height="270px" />   
                      <div class="card-body">
                          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, maiores.</p>
                      </div>     
                  </div>
              </div> 
          </div>
        </div>      
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,256L60,234.7C120,213,240,171,360,149.3C480,128,600,128,720,106.7C840,85,960,43,1080,74.7C1200,107,1320,213,1380,266.7L1440,320L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

        </section>


      <section id="Kontak">
        <div class="container">
            <div class="row text-center">
              <div class="col fs-3">Kontak</div>
            </div>
            
          <div class="row justify-content-center">
            <div class="col-md-7">
              <form action="" method="post">
  
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Anda</label>
                  <input type="text" class="form-control" name="namaa">
                </div>
  
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="emaill">
                </div>
  
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <input type="text" class="form-control" name="pesann">
                </div>
  
                <input type="submit" value="simpan" name="proses" class="btn btn-dark">
              </form>
            </div>
          </div>
        </div>
        </section>
  
        <footer>
          <div class="card text-white mt-5">
            <div class="card-body text-center" style="background-color: #273036;">
              
              Created BY.Elvin Mauladan
              
            </div>
          </div>
        </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>