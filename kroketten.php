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
    <title>Kroketten</title>
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
				<li class="breadcrumb-item active" aria-current="page">Kroketten</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Kroketten</h2>
          <p class="lead">Kroketten merupakan makanan ringan (<i>snack</i>) ala Belanda yang menggunakan daging sapi sebagai
          bahan dasarnya, atau bisa juga menggunakan daging ayam. Umumnya kue ini berisi campuran irisan daging sapi/ayam
          atau daging sapi/ayam cincang, kaldu daging, mentega, tepung untuk mengentalkan adonan, daun peterseli, dan garam,
          yang dimasak dalam adonan tepung (<i>roux</i>) yang pekat. Beberapa resep menggunakan buah pala, resep lainnya menambahkan
          bubuk kari ke dalam adonan. Sayuran yang dicincang seperti wortel, daun bawang dan kacang polong juga umum ditemukan
          di dalam kroketten. Lalu bagaimana cara membuatnya? Yuk simak resep berikut ini!</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <ul>
                        <li>150 gram keju parut</li>
                        <li>400 ml susu</li>
                        <li>120 gram mentega</li>
                        <li>150 gram tepung terigu</li>
                        <li>100 gram daging ayam direbus diiris kecil</li>
                        <li>1 sendok makan seledri cincang</li>
                        <li>1 sendok makan bawang bombay cincang</li>
                        <li>Garam dan merica secukupnya</li>
                        <li>4 butir putih telur</li>
                        <li>Tepung panir</li>
                        <li>Pala secukupnya</li>
                        <li>Minyak untuk menggoreng</li>
                    </ul>
                    <h6 class="card-title">Bahan Saus</h6>
                    <ul>
                        <li>500 ml kaldu</li>
                        <li>1 sendok makan mustard</li>
                        <li>20 gram tepung maizena</li>
                        <li>1 sendok makan mentega</li>
                        <li>Garam secukupnya</li>
                        <li>Merica secukupnya</li>
                        <li>4 sendok makan gula</li>
                        <li>1 sendok makan cuka</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/eur/kroketten.jpg" class="img-thumbnail mb-4" alt="kroketten">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li><b>Saus Mustard:</b> Campur semua bahan saus kecuali mentega, jerang diatas api. Setelah kental, masukkan mentega, aduk, angkat.</li>
                        <li>Rebus susu dan mentega sampai meleleh, masukkan tepung terigu dan bawang bombay, aduk rata, angkat.</li>
                        <li>Masukkan keju, daging ayam, seledri, garam, pala dan merica, aduk rata, dinginkan.</li>
                        <li>Setelah dingin, dibentuk bulat panjang, dipanir lalu dibalur dengan putih telur kemudian dipanir lagi.</li>
                        <li>Goreng dalam minyak yang banyak dan panas sampai kuning kecoklatan, angkat.</li>
                        <li>Hidangkan selagi hangat dengan saus mustard.</li>
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