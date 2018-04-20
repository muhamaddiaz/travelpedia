@extends('layouts.app')

@section('title', 'Travelpedia')

@section('content')
    <div class="cont-ct">
        <div class="faded text-white">
            <div class="faded-content">
                <h1 class="display-1" style="font-weight: 500">Travelpedia</h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <br>
                        <form action="{{route('cari.wisata')}}" method="get">
                            <input type="search" name="search" class="form-control" placeholder="Cari wisata" required/>
                            <br>
                            <button type="submit" class="btn btn-success">Cari wisata</button>
                            <a class="btn btn-primary" href="{{route('wisata.favorit')}}"><i class="fas fa-star"></i> Wisata favorit</a>
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
                        <img src="{{asset('images/bromo.jpg')}}" style="width: 100%"/>
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
                        <img src="{{asset('images/bali.jpg')}}" style="width: 100%"/>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('images/raja_ampat.jpeg')}}" style="width: 100%"/>
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
        <a class="btn btn-danger" href="{{route('register')}}">Daftar sekarang!</a>
        <a class="btn btn-success" href="{{route('login')}}">Login sekarang!</a>
    </div>
@endsection