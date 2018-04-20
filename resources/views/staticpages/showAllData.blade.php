@extends('layouts.app')

@section('title', "Menampilkan seluruh data")

@section('content')
    <div class="container-fluid bg-bromo" style="padding: 0">
        <div class="faded-search text-white">
            <br><br>
            <h1 class="display-3" style="font-weight: 900">Menampilkan Seluruh Data</h1>
        </div>
    </div>
    <br>
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#home"><i class="far fa-map"></i> Transport</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu1"><i class="far fa-building"></i> Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2"><i class="fas fa-map-marker"></i> Wisata</a>
            </li>
        </ul>
      
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade show active container" id="home">
                <br>
                @if($transport)
                    <div class="row">
                        @foreach($transport as $tp)
                            <div class="col-md-4">
                                <div class='card text-center mb-3'>
                                    @if($tp->jenis_transport == "Pesawat")
                                        <object data="{{$tp->link_image}}" type="image/png" style='width:100%' class="card-img-top">
                                            <img src="{{asset('images/aeroplane.svg')}}" style='width:40%' class="card-img-top mt-3"/>
                                        </object>
                                    @else
                                        <object data="{{$tp->link_image}}" type="image/png" style='width:100%' class="card-img-top">
                                            <img src="{{asset('images/train.svg')}}" style='width:40%' class="card-img-top mt-3"/>
                                        </object>
                                    @endif
                                    <div class='card-body'>
                                        <h2 class=card-title>{{$tp->nama_transport}}</h2>
                                        <p class=card-text>{{$tp->jenis_transport}}</p>
                                        <p class=card-text>Bandung - {{$tp->tujuan_transport}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3 class="text-center">Transport belum terdaftar</h3>
                @endif
            </div>
            <div class="tab-pane fade container" id="menu1">
                <br>
                @if($hotel)
                    <div class="row">
                        @foreach($hotel as $ht)
                            <div class="col-md-4">
                                <div class='card text-center mb-4'>
                                    <object data="{{$ht->link_image}}" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('images/skyline.svg')}}" style='width:60%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class='card-body'>
                                        <h2 class=card-title>{{$ht->nama_hotel}}</h2>
                                        <p class="card-text">{{$ht->lokasi_hotel}}</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endforeach
                    </div>
                @else
                    <h3 class="text-center">Hotel belum terdaftar</h3>
                @endif
            </div>
            <div class="tab-pane fade container" id="menu2">
                <br>
                @if($wisata)
                    <div class="row">
                        @foreach($wisata as $ws)
                            <div class="col-md-4">
                                <div class='card text-center'>
                                    <object data="{{$ws->link_image}}" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('images/destination.svg')}}" style='width:60%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class='card-body'>       
                                        <h2 class=card-title>{{$ws->nama_wisata}}</h2>
                                        <p class="card-text">{{$ws->lokasi_wisata}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('wisata', ['id' => $ws->id_wisata])}}" class="btn btn-info btn-block">Selengkapnya</a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <br>
                        @endforeach
                    </div>
                @else
                    <h3 class="text-center">Wisata belum terdaftar</h3>
                @endif
            </div>
        </div>
    </div>
<br><br>
@endsection