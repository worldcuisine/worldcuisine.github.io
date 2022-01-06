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
    <title>Pempek</title>
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
				<li class="breadcrumb-item active" aria-current="page">Pempek</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Pempek</h2>
          <p class="lead">Pempek adalah makanan khas Palembang terbuat dari ikan salah satunya tenggiri.
          Bentuk pempek beragam, lenjer atau memanjang misalnya. Pempek khas Palembang mempunyai tekstur
          padat di luar tetapi ketika digigit terasa lembut, tidak membuat gigi sakit ketika mengunyah.
          Jajanan tradisional Pempek tidak pernah ada matinya. Menyantap satu porsi pempek ikan tenggiri
          dengan cuko yang sedap jadi kenikmatan yang tidak ada duanya. Yuk, bikin pempek ikan tenggiri
          sendiri di rumah. Resep pempek ikan tenggiri yang enak ternyata tidak sesusah bayangan kamu.
          Bahkan tidak butuh waktu hingga satu jam untuk membuat pempek yang enak. Ini buktinya!</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <h6 class="card-title">Bahan Pempek</h6>
                    <ul>
                        <li>300 gram ikan tenggiri, haluskan dengan <i>food processor</i></li>
                        <li>200 gram tepung sagu tani</li>
                        <li>3 siung bawang putih, haluskan</li>
                        <li>1 sendok makan garam</li>
                        <li>½ sendok makan gula pasir</li>
                        <li>½ sendok teh merica bubuk</li>
                        <li>100 ml air dingin</li>
                        <li>3 butir telur</li>
                        <li>air secukupnya, untuk merebus</li>
                        <li>minyak goreng secukupnya, untuk menggoreng</li>
                    </ul>
                    <h6 class="card-title">Bahan Cuko</h6>
                    <ul>
                        <li>100 gram cabe rawit, haluskan</li>
                        <li>8 siung bawang putih, haluskan</li>
                        <li>400 gram gula merah</li>
                        <li>2 sendok makan asam jawa, larutkan dengan air</li>
                        <li>1 liter air</li>
                        <li>½ sendok makan garam</li>
                        <li>½ sendok makan gula pasir</li>
                    </ul>
                    <h6 class="card-title">Bahan Pelengkap</h6>
                    <ul>
                        <li>ebi bubuk, secukupnya</li>
                        <li>mentimun, potong kotak kecil</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/idn/pempek.jpg" class="img-thumbnail mb-4" alt="pempek">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li>Campurkan ikan bersama bawang putih, garam, gula dan merica bubuk. Aduk rata lalu tambahkan air dingin
                        sedikit demi sedikit sambil terus diuleni sampai kalis.</li>
                        <li>Masukkan tepung sagu, uleni kembali sampai tercampur rata.</li>
                        <li>Ambil 200 gram adonan. Bentuk bulat pipih, lalu buat kantung dan masukkan 1 butir telur ke dalamnya,
                        tutup rapat. Lakukan sampai adonan habis.</li>
                        <li>Rebus pempek dalam air mendidih sampai matang, kurang lebih selama 30 menit.</li>
                        <li>Goreng pempek dalam minyak panas sampai kecokelatan.</li>
                        <li><b>Cuko:</b> Rebus cabe dan bawang putih sampai mendidih. Masukkan gula merah, garam, gula pasir dan air
                        asam jawa. Masak kembali sampai kuah menyusut dan sedikit mengental. Sajikan pempek bersama cuko
                        serta ebi dan mentimun.</li>
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