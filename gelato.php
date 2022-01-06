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
    <title>Gelato</title>
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
				<li class="breadcrumb-item active" aria-current="page">Gelato</li>
			</ol>
	    </nav>
    </div>

    <div class="container text-center mb-3">
      <div class="row">
        <h2 class="display-2 mt-4">Gelato</h2>
          <p class="lead">Gelato adalah es krim khas Italia yang punya ciri tekstur lebih padat dan rasa yang tajam.
              Di Italia, gelato lebih sering menjadi hidangan camilan. Adonan dasar gelato disebut <i>gelato di crema</i>,
              berasal dari susu atau krim yang dikentalkan dengan gula dan kuning telur. Hampir semua gelato dibuat
              dengan resep dasar tersebut dan ditambahkan rasa sesuai selera. Seperti yang kita tahu, untuk membuat
              es krim biasanya dibutuhkan mesin khusus. Bagaimana cara membuatnya? Yuk kita simak resep berikut ini!</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bahan-bahan</h5>
                    <ul>
                        <li>½ liter susu cair segar</li>
                        <li>15 sendok teh essense vanilla</li>
                        <li>125 gram gula pasir</li>
                        <li>250 gram whipped cream</li>
                        <li>4 kuning telur</li>
                    </ul>
                    <h6 class="card-title">Bahan Perasa</h6>
                    <ul>
                        <li>250 ml jus pure mangga</li>
                        <li>4 sendok makan grand marnier</li>
                        <li>6 buah markisa</li>
                        <li>½ kg buah persik matang, rebus dengan 125 gram gula dan air secukupnya, kupas buang bijinya dan haluskan</li>
                        <li>5 ruas jahe, kita rajang halus</li>
                        <li>6 sendok makan sirup jahe</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="img/eur/gelato.jpg" class="img-thumbnail mb-4" alt="gelato">
                </div>
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat</h5>
                    <ol>
                        <li><b>Membuat adonan dasar gelato:</b> Rebus essense vanilla dengan susu cair hingga mendidih. Angkat dan sisihkan
                        kemudian diamkan selama kurang lebih 15 menit.</li>
                        <li>Kita kocok kuning telur hingga berbuih, kemudian masukkan 2 sendok makan susu cair yang telah didihkan
                        dan aduk aduk perlahan. Tambahkan juga gula pasir aduk aduk lagi hingga merata.</li>
                        <li>Setelah itu masukkan atau campurkan kocokan telur dengan semua susu cair dan masak dalam double boiler
                        dengan cara di tim atau bisa anda tim secara biasa tanpa double boiler. Masak jangan sampai susu mendidih.</li>
                        <li>Kemudian dinginkan dan rendam dalam panci berisi air dingin. Setelah dingin masukkan whipped cream.
                        Bagi gelato menjadi 4 bagian dan beri masing masing dengan perasa yang berbeda.</li>
                        <li>Kemudian masukkan dalam mesin pembuat es krim. Dan pindahkan dalam wadah tahan beku dan bekukan dalam freezer 
                        hingga sampai disajikan.</li>
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