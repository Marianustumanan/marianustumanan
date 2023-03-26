<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>PENCARIAN FILM</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=f45216c6&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>PENCARIAN FILM</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>DAFTAR FILM</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="the raid.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">The Raid</h5>
        <p class="card-text">The Raid is a 2011 Indonesian action thriller film written, directed and edited by Gareth Evans. The film stars Iko Uwais, who previously worked with Evans in another action film, Merantau, released in 2009. In the film, an elite squad is tasked to infiltrate a high-rise building run by a ruthless drug lord in the slums of Jakarta; among them is Rama (played by Uwais), a veteran member of the team.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="harry potter.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Harry Potter</h5>
        <p class="card-text">Harry Potter is a film series based on the eponymous novels by J. K. Rowling. The series is produced and distributed by Warner Bros. Pictures and consists of eight fantasy films, beginning with Harry Potter and the Philosopher's Stone (2001) and culminating with Harry Potter and the Deathly Hallows – Part 2 (2011). A spin-off prequel series, planned to consist of five films, started with Fantastic Beasts and Where to Find Them (2016), marking the beginning of the Wizarding</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="dreadout.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Dread Out</h5>
        <p class="card-text">DreadOut adalah sebuah film horor fantasi Indonesia tahun 2019 yang disutradarai oleh Kimo Stamboel. Film ini diadaptasi dari permainan video dengan judul yang sama karya Digital Happiness, Bandung.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="bucin.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Bucin</h5>
        <p class="card-text">Bucin menjadi debut perdana Chandra Liow sebagai sutradara. Film ini menggaet tiga YouTuber ternama, Andovi Da Lopez, Jovial Da Lopez juga Tommy Lim.
Berangkat dari fenomena masa kini tentang istilah budak cinta yang jadi tren, Bucin menyodorkan kisah tentang empat pemuda yang berusaha lepas dari kebucinan mereka dari pasangan mereka masing-masing. Kecuali Chandra Liow, ia mendukung tiga temannya untuk bisa 'hidup bebas' dari kendali pasangan yang lebih dari sekadar posesif.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gundala.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Gundala</h5>
        <p class="card-text">Gundala adalah film pembuka dalam rangkaian cerita Jagat Bumilangit berdasarkan cerita komik Indonesia. Film ini bercerita tentang seorang anak kecil bernama Sancaka yang hidup sebatang kara setelah ditelantarkan oleh orang tuanya. Setelah dewasa, Sancaka memperoleh kekuatan petir.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="batman.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Batman</h5>
        <p class="card-text">Batman adalah tokoh fiksi pahlawan super yang diciptakan oleh seniman Bob Kane dan penulis Bill Finger dan diterbitkan oleh DC Comics. Tokoh ini pertama muncul di Detective Comics #27 (Mei 1939). Identitas asli Batman adalah Bruce Wayne, seorang pengusaha yang kaya raya. Nama Bruce Wayne itu sendiri diambil dari nama tokoh sejarah, yaitu Robert the Bruce dan Anthony Wayne.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Toy Story 3.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Toy Story 3</h5>
        <p class="card-text">Toy Story 3 adalah film komedi animasi komputer Amerika 2010 yang diproduksi oleh Pixar Animation Studios untuk Walt Disney Pictures. Ini adalah angsuran ketiga dalam seri Toy Story Pixar, dan sekuel Toy Story 2 1999. Film ini disutradarai oleh Lee Unkrich.</p>
      </div>
    </div>
  </div>
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
