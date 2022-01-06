<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    body {
    background-image: url('img/food.png');
    }
    </style>

    <link rel="shortcut icon" type="image/png" href="img/chef.png">
    <title>Gado-gado</title>
  </head>
  <body>
    <?php
      include('header.php');
    ?>

    <div class="container pt-5 mt-4">
        <nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="indonesian.php">Indonesian Cuisines</a></li>
				<li class="breadcrumb-item active" aria-current="page">Gado-gado</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Gado-gado</h2>
          <p class="lead">Resep gado-gado sudah dikenal sejak lama sebagai salad-nya orang Indonesia. Kombinasi sayuran segar,
          kentang, tempe, dan tahu berpadu lezat dengan bumbu gado-gado yang khas dibuat dari kacang. Ada rasa gurih, manis,
          dan untuk penggemar rasa pedas, tentu jangan sampai ketinggalan ditambah cabai. Penasaran dengan istimewanya resep
          yang satu ini? Mari kita simak cara membuat gado-gado berikut!</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <ul>
                        <li>350 g kentang, kukus, kupas, potong-potong</li>
                        <li>350 g tahu putih</li>
                        <li>350 g tempe, potong kotak 3 cm</li>
                        <li>7 lembar daun selada, sobek-sobek</li>
                        <li>2 buah ketimun, iris tipis</li>
                        <li>100 g taoge, rebus</li>
                        <li>200 g kol, iris kasar, rebus</li>
                        <li>Minyak, untuk menggoreng dan menumis</li>
                        <li>Bumbu perendam tahu-tempe, aduk rata</li>
                        <li>3 siung bawang putih, haluskan</li>
                        <li>1 sdt ketumbar bubuk</li>
                        <li>1 sdt garam</li>
                        <li>200 ml air</li>
                    </ul>
                    <h6 class="card-title">Bumbu Kacang</h6>
                    <ul>
                        <li>200 g kacang tanah kulit, goreng, haluskan</li>
                        <li>3 lembar daun jeruk, buang tulang daunnya</li>
                        <li>2 sdm kecap manis</li>
                        <li>1 sdt garam</li>
                        <li>3 sdt gula merah</li>
                        <li>300 ml santan encer</li>
                        <li>300 ml air</li>
                        <li>1 sdt asam jawa, larutkan dengan 2 sdm air</li>
                    </ul>
                    <h6 class="card-title">Bumbu Halus</h6>
                    <ul>
                        <li>5 buah cabai merah besar, buang bijinya</li>
                        <li>3 buah cabai merah keriting</li>
                        <li>5 cm kencur</li>
                        <li>4 siung bawang putih</li>
                        <li>½ sdt terasi goreng</li>
                    </ul>
                    <h6 class="card-title">Pelengkap</h6>
                    <ul>
                        <li>6 butir telur rebus, kupas, potong 2</li>
                        <li>2 buah tomat, potong-potong</li>
                        <li>3 sdm bawang merah goreng</li>
                        <li>Kerupuk</li>
                        <li>Emping</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/idn/gado-gado.jpg" class="img-thumbnail mb-4" alt="gado-gado">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li>Aduk rata tempe dan tahu bersama bumbu perendam. Sisihkan.</li>
                        <li>Panaskan minyak, goreng tahu dan tempe hingga garing dan matang. Angkat dan tiriskan. Sisihkan.</li>
                        <li><b>Bumbu kacang:</b> Panaskan 3 sdm minyak, tumis bumbu halus dan daun jeruk hingga harum. Masukkan kacang
                            tanah dan kecap manis, aduk rata. Tambahkan sisa semua bahan, aduk. Masak hingga matang. Angkat.
                            Biarkan hingga tidak panas.</li>
                        <li>Tata kentang, tahu, tempe, daun selada, ketimun, taoge, dan kol di atas piring saji. Tuang bumbu kacang
                            dan taburi bawang merah goreng. Sajikan dengan pelengkap.</li>
                    </ol>
                </div>
                </div>
                <div>
                    <p class="lead text-center">Selamat Mencoba!</p>
                </div>
            </div>
        </div>
    </div>

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