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
    <title>Klepon</title>
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
				<li class="breadcrumb-item active" aria-current="page">Klepon</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Klepon</h2>
          <p class="lead">Klepon merupakan salah satu jenis jajanan tradisional yang disukai segala usia. Selain rasanya yang manis
          dan gurih, cara membuat klepon pun tergolong mudah. Ada banyak cara membuat klepon yang enak dan lezat. Apalagi klepon yang
          dibuat memiliki tekstur lembut dan isiannya lumer di mulut serta Ada sensasi ledakan gula merah saat klepon digigit. Namun,
          untuk mendapat sensasi ledakan gula merah saat klepon digigit, tentu kita harus memilih resep klepon dengan tepat. Penasaran
          dengan resep klepon paling simpel? Yuk kita simak resep berikut ini!</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <ul>
                        <li>400 gr tepung ketan putih</li>
                        <li>50 gr tepung beras atau tepung sagu</li>
                        <li>½ butir kelapa, peras untuk 250 ml santan</li>
                        <li>25 ml air suji, hasil campuran 20 lebar daun suji dan 2 lembar daun pandan</li>
                        <li>2 sdt air kapur sirih</li>
                        <li>160 gr gula merah, sisir untuk isian</li>
                        <li>300 gr kelapa parut kasar</li>
                        <li>4 lembar daun pandan</li>
                        <li>½ sdt garam</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/idn/klepon.jpg" class="img-thumbnail mb-4" alt="klepon">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li>Buat bahan taburan terlebih dahulu dengan mencampurkan parutan kelapa dengan 4 lembar daun bawang
                        dan ½ sdt garam. Kukus di api sedang sampai matang (kurang lebih 20 menit, supaya tidak cepat basi).</li>
                        <li>Sementara itu, buatlah bola klepon dengan mencapur tepung ketan, tepung sagu, dan air kapur sirih.</li>
                        <li>Masukkan santan sedikit demi sedikit, lalu tambahkan air daun suji sedikit dan aduk sampai kalis.</li>
                        <li>Jika sudah dirasa kalis, ambil adonan lalu pipihkan.</li>
                        <li>Masukkan sisiran gula merah ke dalam pipihan adonan lalu gulung sampai membentuk bulat.</li>
                        <li>Rebus seluruh adonan yang telah diisi dengan sisiran gula merah.</li>
                        <li>Angkat rebusan klepon jika sudah mengapung ke permukaan air.</li>
                        <li>Gilingkan klepon yang masih hangat ke taburan kelapa yang telah disiapkan terlebih dahulu.</li>
                        <li>Klepon siap dinikmati.</li>
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