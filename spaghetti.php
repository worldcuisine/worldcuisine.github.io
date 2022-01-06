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
    <title>Spaghetti</title>
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
				<li class="breadcrumb-item active" aria-current="page">Spaghetti</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Resep Spaghetti Bolognesse</h2>
          <p class="lead">Spaghetti bolognese merupakan hidangan pasta klasik khas Italia yang populer hampir di seluruh penjuru dunia. 
            Makanan dengan saus tomat dan daging cincang ini memiliki cita rasa yang sangat khas. Menjadikannya cocok dinikmati semua orang, 
            dari anak-anak, orang dewasa, sampai orang tua.Variasi pasta ini juga beragam, misalnya kamu bisa menambah keju, daging, 
            bahkan memanggangnya dengan tambahan topping keju super meleleh. Cara memasaknya yang simpel, sangat pas mengobati lapar 
            yang tiba-tiba menyerang. Makanya, yuk simak resep masakan spaghetti bolognese ini!</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <ul>
                        <li>150 gram Spaghetti, direbus</li>
                        <li>2 siung bawang putih cincang</li>
                        <li>½ sdt seledri cincang, peras</li>
                        <li>1 sdm minyak untuk menumis</li>
                        <li>100 gram daging sapi cincang</li>
                        <li>50 gram jamur kancing, potong menjadi 3 bagian</li>
                        <li>½ buah bawang bombai, cincang halus</li>
                        <li>2 buah tomat merah yang sudah diseduh dan dibuang kulit serta bijinya, cincang kasar</li>
                        <li>5 sdm saus tomat</li>
                        <li>1 sdm pasta toma</li>
                        <li>¾ sdt garam</li> 
                        <li>¼ sdt merica bubuk</li>
                        <li>¾ sdt gula pasir</li>
                        <li>½ sdt oregano</li>
                        <li>½ sdt basil</li>
                        <li>2 sdm minyak untuk menumis</li>
                        <li>200 ml air</li>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/eur/spaghetti.jpeg" class="img-thumbnail mb-4" alt="spaghetti">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li>Panaskan minyak untuk menumis. Jika sudah panas, masukkan dan tumis bawang putih hingga harum. Masukkan 
                          spaghetti dengan seledri, aduk hingga merata lalu sisihkan.</li>
                        <li>Masukkan kembali minyak untuk menumis dan membuat saus bolognese. Masukkan daging giling dan tumis hingga 
                          matang serta berubah warna.</li>
                        <li>Tambahkan jamur kancing yang sudah dipotong dan juga tomat. Aduk hingga merata. Masukkan says dengan pasta 
                          tomat, sedikit gula, garam, dan merica bubuk, lalu aduk kembali hingga rata.</li>
                        <li>Tuangkan air sedikit demi sedikit hingga meresap dan matang. Tambahkan oregano dan basil pada saus tersebut.</li>
                        <li>Masukkan kembali spaghetti ke dalam adonan saus bolognese. Voila! Spaghetti saus Bolognese siap disajikan.</li>
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