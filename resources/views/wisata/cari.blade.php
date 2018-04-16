@extends('layouts.app')

@section('title', 'Pencarian untuk')

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
        <p>Pilihan transport di {{$ke}}</p>
        <hr>
        @foreach($transport as $tp)
            <div class='card'>
                <div class='card-body'>
                    <div class='row'>
                        <div class='col-md-4'>
                            <img src="{{$tp->link_image}}" style=width:100% />
                        </div>
                        <div class='col-md-8'>
                            <h2 class=card-title>{{$tp->nama_transport}}</h2>
                            <p class=card-text>{{$tp->jenis_transport}}</p>
                        </div>
                    </div>
                </div>
                <div class='card-footer'>
                    <p class=card-text>{{$dari}} - {{$ke}}</p>
                </div>
            </div>
            <br>
        @endforeach
        <p>Pilihan hotel di {{$ke}}</p>
        <hr>
        @foreach($hotel as $ht)
            <div class='card'>
                <div class='card-body'>
                    <div class='row'>
                        <div class='col-md-4'>
                            <img src="{{$ht->link_image}}" style=width:100% />
                        </div>
                        <div class='col-md-8'>
                            <h2 class=card-title>{{$ht->nama_hotel}}</h2>
                            <p class="card-text">{{$ht->lokasi_hotel}}</p>
                            <p class=card-text>{{$ht->deskripsi_hotel}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        <p>Pilihan wisata di {{$ke}}</p>
        <hr>
        @foreach($wisata as $ws)
            <div class='card'>
                <div class='card-body'>
                    <div class='row'>
                        <div class='col-md-4'>
                            <img src="{{$ws->link_image}}" style=width:100% />
                        </div>
                        <div class='col-md-8'>
                            <h2 class=card-title>{{$ws->nama_wisata}}</h2>
                            <p class="card-text">{{$ws->lokasi_wisata}}</p>
                            <p class=card-text>{{$ws->deskripsi_wisata}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('wisata', ['id' => $ws->id_wisata])}}" class="btn btn-info btn-block">Selengkapnya</a>
                </div>
            </div>
            <br>
        @endforeach
        <!--<p>Pilihan hotel di {{$ke}}</p>
        <hr>
        <div class='card'>
            <div class='card-body'>
                <div class='row'>
                    <div class='col-md-4'>
                        <img src=$photo_transport style=width:100% />
                    </div>
                    <div class='col-md-8'>
                        <h2 class=card-title>$nama_transport</h2>
                        <p class=card-text>$jenis_transport</p>
                    </div>
                </div>
            </div>
            <div class='card-footer'>
                <p class=card-text>$dari - $tujuan</p>
            </div>
        </div>
        <br>
        <p>Pilihan wisata di {{$ke}}</p>
        <hr>
        <div class='card'>
            <div class='card-body'>
                <div class='row'>
                    <div class='col-md-4'>
                        <img src=$photo_transport style=width:100% />
                    </div>
                    <div class='col-md-8'>
                        <h2 class=card-title>$nama_transport</h2>
                        <p class=card-text>$jenis_transport</p>
                    </div>
                </div>
            </div>
            <div class='card-footer'>
                <p class=card-text>$dari - $tujuan</p>
            </div>
        </div>
        <br>-->
    </div>
@endsection