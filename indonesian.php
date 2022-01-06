<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .cek
          {
              background-image: url('img/indonesian.jpg');
              background-repeat: no-repeat;
              background-size: cover;
              height:300px;
          }
    </style>

    <link rel="shortcut icon" type="image/png" href="img/chef.png">
    <title>Indonesian Cuisines</title>
  </head>
  <body>
    <?php
      include('header.php');
    ?>

    <div class="jumbotron jumbotron-fluid cek pt-5">
      <div class="container mt-5">  
      </div>
    </div>

    <div class="container text-center">
      <div class="row">
        <h2 class="display-2 mt-4">Indonesian Cuisines</h2>
          <p class="lead">Resep masakan tradisional yang kaya akan rasa, warna, dan sejarah. Berikut adalah kumpulan resep masakan Indonesia klasik yang dipilihkan khusus untukmu!</p>
      </div>
    </div>

    <section id="resep-indo" class="resep-indo py-4">
    <div class="container mt-3">
      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <a href="rendang.php"><img src="img/idn/rendang.jpg" class="card-img-top" alt="rendang"></a>
            <div class="card-body">
              <p class="card-text">Rendang</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="sate.php"><img src="img/idn/sate.jpg" class="card-img-top" alt="sate"></a>
            <div class="card-body">
              <p class="card-text">Sate Ayam</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="gado-gado.php"><img src="img/idn/gado-gado.jpg" class="card-img-top" alt="gado-gado"></a>
            <div class="card-body">
              <p class="card-text">Gado-gado</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <a href="gudeg.php"><img src="img/idn/gudeg.jpg" class="card-img-top" alt="gudeg"></a>
            <div class="card-body">
              <p class="card-text">Gudeg</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="soto.php"><img src="img/idn/soto.jpg" class="card-img-top" alt="soto"></a>
            <div class="card-body">
              <p class="card-text">Soto</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="pempek.php"><img src="img/idn/pempek.jpg" class="card-img-top" alt="pempek"></a>
            <div class="card-body">
              <p class="card-text">Pempek</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <a href="klepon.php"><img src="img/idn/klepon.jpg" class="card-img-top" alt="klepon"></a>
            <div class="card-body">
              <p class="card-text">Klepon</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="nasi-kuning.php"><img src="img/idn/nasi-kuning.jpg" class="card-img-top" alt="nasi-kuning"></a>
            <div class="card-body">
              <p class="card-text">Nasi Kuning</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="rawon.php"><img src="img/idn/rawon.jpg" class="card-img-top" alt="rawon"></a>
            <div class="card-body">
              <p class="card-text">Rawon</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <a href="gulai.php"><img src="img/idn/gulai.jpeg" class="card-img-top" alt="gulai"></a>
            <div class="card-body">
              <p class="card-text">Gulai</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <footer class="bg-dark text-white">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>Copyright 2021.</p>
        </div>
      </div>
    </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>