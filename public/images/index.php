<?php 
    session_start(); 
    if(isset($_SESSION['id_user'])) {
        header('Location: '. 'http://localhost/pariwisata/middleware/login-middleware.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/assets.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="cont-ct">
        <div class="faded text-white">
            <div class="faded-content">
                <h1 class="display-1" style="font-weight: 500">Travelpedia</h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <br>
                        <form action="./view/search-wisata.php" method="get">
                            <input type="search" name="search" class="form-control" placeholder="Cari wisata" required/>
                            <br>
                            <button type="submit" class="btn btn-success">Cari wisata</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
        <h1 class="display-4">AWESOME AWAITS FOR YOU</h1>
        <p>Scroll for more info</p>
    </div>
    <br>
    <div class="container">
        <div class="jumbotron text-white indo-bg">
            <h2 class="display-4">Indonesia</h2>
            <p>Indonesia we come for you</p>
        </div>
        <h3 class="display-5">Sekilas tentang Indonesia</h3>
        <p>
        Indonesia adalah negara yang sangat besar. Mulai dari jumlah penduduk, 
        luas wilayah, sumber daya alam hingga seni budaya dan adat istiadatnya. 
        Dilihat dari Jumlah penduduknya, penduduk Indonesia merupakan yang keempat 
        terbesar didunia, setelah Cina, India, dan Amerika.
        </p>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./assets/bromo.jpg" style="width: 100%"/>
                    </div>
                    <div class="col-md-6">
                        <h3 class="card-title">Bromo</h3>
                        <p class="card-text">
                        Adalah tempat wisata yang terletak di timur indonesia, 
                        yang memiliki keindahan yang sangat luar biasa, gunung ini memiliki
                        ketinggian 2.329 meter di atas permukaan laut dan berada dalam 4 wilayah
                        kabupaten, yakni kabupaten Probolinggo, kabupaten Pasuruan, kabupaten Lumajang
                        dan kabupaten Malang.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">Bali</h3>
                        <p class="card-text">
                        Bali adalah sebuah pulah di Indonesia yang dikenal karena memiliki
                        pegunungan berapi yang hijau, terasering yang cantik. Terdapat banyak tempat
                        wisata religi seperti pura Uluwatu yang berdiri diatas tebing. Di Selatan, kota 
                        pesisir pantai kuta menawarkan wisata hiburan malam yang tak pernah sepi.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="./assets/bali.jpg" style="width: 100%"/>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./assets/raja_ampat.jpeg" style="width: 100%"/>
                    </div>
                    <div class="col-md-6">
                    <h3 class="card-title">Raja Ampat</h3>
                    <p>
                    Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian 
                    kepala burung vogelkoop pulau papua. Secara administrasi, gugusan ini berada di bawah kabupaten raja ampat
                    Provinsi Papua Barat kepulauan ini sekarang menjadi tujuan para penyelam yang tertarik akan keindahan 
                    pemandangan bawah lautnya.
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="container bg-purple text-center text-white" style="padding: 50px">
        <h1 style="margin: 0;">Jangan terlalu lama membaca, ayo liburan sekarang!</h1>
        <p>Lupakan sejenak masalah</p>
        <a class="btn btn-danger" href="./view/signup.php">Daftar sekarang!</a>
        <a class="btn btn-success" href="./view/login.php">Login sekarang!</a>
    </div>
</body>
</html>