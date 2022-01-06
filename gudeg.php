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
    <title>Gudeg</title>
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
				<li class="breadcrumb-item active" aria-current="page">Gudeg</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Gudeg</h2>
          <p class="lead">Rasa kangen kota Jogja bisa kamu tebus dengan menikmati gudeg. Makanan khas Jogja ini bisa dibuat sendiri 
            dengan bumbu segar dan sedap. Gudeg yang dibuat dari nangka muda merupakan makanan ikonik Jogjakarta. Dimasak dengan bumbu 
            dan santan hingga warnanya kecokelatan dan manis gurih rasanya. Membuat gudeg sendiri tak sesulit yang dibayangkan. 
            Asalkan memakai nangka muda yang bagus kualitasnya dan bumbu komplet, gudeg enak bisa kamu dapatkan. Satu lagi resep 
            rahasianya adalah kesabaran. Karena memasak gudeg merupakan 'slow cooking' yang perlu waktu lama. Kalau ingin membuat 
            gudeg sendiri ikuti resep dan tips berikut ini.</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <ul>
                        <li>1,5 kg nangka muda</li>
                        <li>1,5 liter santan</li>
                        <li>80 gram gula merah</li>
                        <li>2 batang serai yang digeprek</li>
                        <li>1 ruas lengkuas yang digeprek</li>
                        <li>4 lembar daun salam</li>
                        <li>1,5 sdt ketumbar</li>
                        <li>Garam dan kaldu bubuk secukupnya</li>
                        <li>12 siung bawang merah</li>
                        <li>8 siung bawang putih</li>
                        <li>5 butir kemiri</li>
                        <li>Terasi secukupnya</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/idn/gudeg.jpg" class="img-thumbnail mb-4" alt="gudeg">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li>Haluskan bawang merah, bawang putih, kemiri, dan terasi.</li>
                        <li>Siapkan panci, lalu masukkan semua bahan ke dalamnya, termasuk bumbu halusnya.</li>
                        <li>Masak dengan api kecil sambil sesekali diaduk perlahan.</li>
                        <li>Tunggu hingga kuah menyusut dan nangka empuk.</li>
                        <li>Cicipi rasa dan tambahkan garam dan kaldu bubuk sesuai selera.</li>
                        <li>Sajikan hangat dengan nasi putih.</li>
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