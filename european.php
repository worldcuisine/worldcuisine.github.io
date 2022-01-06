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
              background-image: url('img/european.jpeg');
              background-repeat: no-repeat;
              background-size: cover;
              height:300px;
          }
    </style>

    <link rel="shortcut icon" type="image/png" href="img/chef.png">
    <title>European Cuisines</title>
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
        <h2 class="display-2 mt-4">European Cuisines</h2>
          <p class="lead">Hidangan terbaik khas Eropa yang populer hingga ke seluruh penjuru dunia. Berikut adalah kumpulan resep masakan Eropa yang harus kamu coba!</p>
      </div>
    </div>

    <section id="resep-eropa" class="resep-eropa py-4">
    <div class="container mt-3">
      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <a href="pizza.php"><img src="img/eur/pizza.jpg" class="card-img-top" alt="pizza"></a>
            <div class="card-body">
              <p class="card-text">Pizza</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="crepes.php"><img src="img/eur/crepes.jpg" class="card-img-top" alt="crepes"></a>
            <div class="card-body">
              <p class="card-text">Crepes</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="frittes.php"><img src="img/eur/frittes.jpg" class="card-img-top" alt="frittes"></a>
            <div class="card-body">
              <p class="card-text">Frittes</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <a href="currywurst.php"><img src="img/eur/currywurst.jpg" class="card-img-top" alt="currywurst"></a>
            <div class="card-body">
              <p class="card-text">Currywurst</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="kroketten.php"><img src="img/eur/kroketten.jpg" class="card-img-top" alt="kroketten"></a>
            <div class="card-body">
              <p class="card-text">Kroketten</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="spaghetti.php"><img src="img/eur/spaghetti.jpeg" class="card-img-top" alt="spaghetti"></a>
            <div class="card-body">
              <p class="card-text">Spaghetti</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <a href="pretzel.php"><img src="img/eur/pretzel.jpg" class="card-img-top" alt="pretzel"></a>
            <div class="card-body">
              <p class="card-text">Pretzel</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="waffle.php"><img src="img/eur/waffle.jpg" class="card-img-top" alt="waffle"></a>
            <div class="card-body">
              <p class="card-text">Waffle</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="gelato.php"><img src="img/eur/gelato.jpg" class="card-img-top" alt="gelato"></a>
            <div class="card-body">
              <p class="card-text">Gelato</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <a href="croissant.php"><img src="img/eur/croissant.jpg" class="card-img-top" alt="croissant"></a>
            <div class="card-body">
              <p class="card-text">Croissant</p>
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