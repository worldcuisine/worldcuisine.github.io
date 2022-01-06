<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="img/chef.png">
    <title>World Cuisine</title>
  </head>
  <body>
    <?php
      include('header.php');
    ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/indonesian.jpg" class="d-block w-100" alt="indonesian_cuisine">
          <div class="carousel-caption d-none d-md-block">
            <h1>Indonesian Cuisine</h1>
            <p>Masakan Indonesia klasik yang kaya akan rasa, warna, dan sejarah.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/european.jpeg" class="d-block w-100" alt="european_cuisine">
          <div class="carousel-caption d-none d-md-block">
            <h1>European Cuisine</h1>
            <p>Hidangan terbaik khas Eropa yang populer hingga ke seluruh penjuru dunia.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
 
    <section id="about" class="about">
    <div class="container mt-5">
      <div class="row mb-4">
        <div class="col text-center">
          <img src="img/world-cuisine.png" width="50%">
        </div>
      </div>
      <div class="row text-center">
        <p class="lead">Bosan masak yang itu-itu saja setiap hari? Ingin mendapat variasi terbaru dari menu favorit yang terkenal
          hingga seluruh penjuru dunia? Eitss... Jangan khawatir! Di sini adalah tempat yang tepat untuk menelusuri,
          mencari, dan berbagi resep-resep andalan dari berbagai dunia. Masak sehari-hari menjadi semakin mudah dan
          menyenangkan.</p>
      </div>
    </div>
  </section>

  <section id="option" class="option bg-light pb-4">
    <div class="container mt-5 mb-3">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h3>Resep Masakan</h3>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card">
            <a href="indonesian.php"><img src="img/indonesian.jpg" class="card-img-top" alt="indonesian_cuisine"></a>
            <div class="card-body">
              <p class="card-text">Indonesian Cuisine</p>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card">
            <a href="european.php"><img src="img/european.jpeg" class="card-img-top" alt="european_cuisine"></a>
            <div class="card-body">
              <p class="card-text">European Cuisine</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </section>

  <section id="contact" class="contact mb-5">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Contact Us</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card text-white bg-primary mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <p class="card-text">Hubungi kami, apabila ada pertanyaan, saran, maupun masukan!</p>
            </div>
        </div>
        <ul class="list-group">
          <li class="list-group-item"><h1>Location</h1></li>
          <li class="list-group-item">Our Office</li>
          <li class="list-group-item">Jl. Colombo No. 1, Sleman</li>
          <li class="list-group-item">Daerah Istimewa Yogyakarta, Indonesia</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <form>
          <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama">
          </div>
          <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email">
          </div>
          <div class="form-group mb-3">
            <label for="telp" class="form-label">No. Telp</label>
            <input type="text" class="form-control" id="telp">
          </div>
          <div class="form-group mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea name="pesan" id="pesan" class="form-control"></textarea>
          </div>
          <div class="form-group mb-3">
            <buttor type="button" class="btn btn-primary">Kirim Pesan!</buttor>
          </div>
      </form>
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