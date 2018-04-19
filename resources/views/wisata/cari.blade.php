@extends('layouts.app')

@section('title', "Pencarian untuk $ke")

@section('content')
    <div class="container-fluid bg-bromo" style="padding: 0">
        <div class="faded-search text-white">
            <br>
            <h1 class="display-3" style="font-weight: 900">Destinasi {{$ke}}</h1>
            <h6 style="font-weight: 600">Jangka waktu: {{$berangkat}} - {{$pulang}}, Untuk {{$infant}} Orang</h6>
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
                                <div class='card'>
                                    <object data="{{$tp->link_image}}" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="https://bit.ly/2q2tUaB" style='width:100%' class="card-img-top"/>
                                    </object>
                                    <div class='card-body'>
                                        <h2 class=card-title>{{$tp->nama_transport}}</h2>
                                        <p class=card-text>{{$tp->jenis_transport}}</p>
                                        <p class=card-text>{{$dari}} - {{$ke}}</p>
                                    </div>
                                    <div class='card-footer'>
                                        <button class="btn btn-danger">Book</button>
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
                                <div class='card'>
                                    <object data="{{$ht->link_image}}" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="https://bit.ly/2Hdr1KC" style='width:100%' class="card-img-top"/>
                                    </object>
                                    <div class='card-body'>
                                        <h2 class=card-title>{{$ht->nama_hotel}}</h2>
                                        <p class="card-text">{{$ht->lokasi_hotel}}</p>
                                    </div>
                                    <div class='card-footer'>
                                        <button class="btn btn-danger">Book</button>
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
                                <div class='card'>
                                    <object data="{{$ws->link_image}}" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('images/bromo.jpg')}}" style='width:100%' class="card-img-top"/>
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