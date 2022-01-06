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
    <title>Rendang</title>
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
				<li class="breadcrumb-item active" aria-current="page">Rendang</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Resep Rendang Asli Padang</h2>
          <p class="lead">Siapa yang tidak suka rendang? Rasanya tak ada satu pun orang yang menolak bila disodori makanan asli asal 
            Sumatera Barat ini. Rasanya yang gurih berbumbu dan teksturnya yang empuk nan lembut membuat rendang begitu digemari. 
            Bukan hanya di Indonesia, rendang juga sangat diminati di mancanegara. Membuat rendang Padang tidaklah susah karena resepnya
            sederhana. Teknik pembuatannya juga tidak terlalu ribet. Karena itulah, kamu yang sangat menyukai rendang, wajib banget 
            buat mencobanya sendiri di rumah. Berikut resep rendang Padang asli yang nikmat nan otentik.</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <ul>
                        <li>1 kg daging sapi</li>
                        <li>1,5 lliter santan kental dari 7 butir kelapa</li>
                        <li>3 batang serai, memarkan</li>
                        <li>10 cm kayu manis</li>
                        <li>½ butir pala</li>
                        <li>1 keping asam kandis</li>
                        <li>7 butir cengkeh</li>
                        <li>9 butir kapulaga</li>
                        <li>2 buah bunga lawing</li>
                        <li>1 lembar daun kunyit</li>
                        <li>5 lembar daun salam</li>
                        <li>7 helai daun jeruk</li>
                    </ul>
                    <h6 class="card-title">Bahan Bumbu Halus</h6>
                    <ul>
                        <li>9 siung bawang putih</li>
                        <li>20 butir bawang merah</li>
                        <li>100 gram cabai merah keriting</li>
                        <li>5 cm jahe</li>
                        <li>5 cm lengkuas</li>
                        <li>2 batang serai, ambil bagian putihnya</li>
                        <li>5 cm kayu manis</li>
                        <li>2 sdt garam</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/idn/rendang.jpg" class="img-thumbnail mb-4" alt="rendang">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li>Siapkan panci, masukkan santan bersama bumbu rempah dan bumbu halus. Masak sambil terus diaduk-aduk hingga santan mengeluarkan minyak.</li>
                        <li>Masukkan daging, masak dengan api kecil hingga matang sambil diaduk sesekali. Angkat.</li>
                        <li>Rendang siap disajikan.</li>
                    </ol>
                </div>
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