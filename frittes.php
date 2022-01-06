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
    <title>Frittes</title>
  </head>
  <body>
    <?php
      include('header.php');
    ?>

    <div class="container pt-5 mt-4">
        <nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="european.php">European Cuisines</a></li>
				<li class="breadcrumb-item active" aria-current="page">Frittes</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Frittes</h2>
          <p class="lead">Pommes frites adalah kentang goreng ala Belgia. Pommes frites biasa disajikan dalam kertas berbentuk kerucut.
            Masyarakat Belgia kerap menyajikan pommes frites untuk lauk sehari-hari atau sebagai camilan. Biasanya, pommes frites dinikmati
            bersama mayones atau saus tomat. Berikut resep pommes frites yang bisa kamu coba. Terdapat pula resep saus kari tomat dan honey
            mustard sauce sebagai cocolannya.</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <ul>
                        <li>6 buah kentang panggang (bisa juga pakai kentang kukus)</li>
                        <li>1 lt minyak sayur</li>
                        <li>Garam secukupnya</li>
                    </ul>
                    <h6 class="card-title">Bahan Saus Kari Tomat</h6>
                    <ul>
                        <li>1 sdt bubuk kari instan</li>
                        <li>141 gram saus tomat</li>
                        <li>141 gram mayones</li>
                        <li>¼ buah bawang bombai, cincang halus</li>
                    </ul>
                    <h6 class="card-title">Bahan Honey Mustard Sauce</h6>
                    <ul>
                        <li>141 gram mayones</li>
                        <li>113 gram mustard</li>
                        <li>1 sdt madu</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/eur/frittes.jpg" class="img-thumbnail mb-4" alt="frittes">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li>Kupas kentang, potong panjang dengan ukuran sebesar jari telunjuk. Sisihkan.</li>
                        <li>Panaskan minyak sayur hingga suhunya mencapai 162 derajat celcius. Goreng kentang dalam minyak
                            selama lima sampai enam menit, atau hingga berwarna keemasan.  Angkat kentang dan tiriskan.
                            Biarkan di suhu ruangan hingga dingin.  </li>
                        <li>Panaskan minyak kembali hingga mencapai suhu 190 derajat celcius. Lalu, goreng kentang lagi
                            selama dua menit atau hingga renyah. Angkat lalu tiriskan.</li>
                        <li>Selagi masih panas, beri garam pada kentang, aduk rata.</li>
                        <li>Saus kari tomat: Campur semua bahan dalam satu wadah. Sisihkan.</li>
                        <li>Honey mustard sauce: Campur semua bahan dalam satu wadah. Sisihkan.</li>
                        <li>Sajikan kentang goreng dengan saus cocolan agar makin nikmat.</li>
                    </ol>
                </div>
                </div>
                <div>
                    <p class="lead text-center mb-4">Selamat mencoba!</p>
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