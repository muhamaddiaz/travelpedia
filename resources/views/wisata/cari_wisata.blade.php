@extends('layouts.app')

@section('title', "Pencarian untuk $search")

@section('content')
    <div class="bg-bromo" style="padding: 0">
        <div class="faded-search text-white">
            <br><br>
            <h1 class="display-3" style="font-weight: 900">Hasil untuk {{$search}}</h1>
            @if($wisata_count->hitung)
                <h3>Terdapat {{$wisata_count->hitung}} lokasi wisata di daerah {{$search}}</h3>
            @endif
        </div>
    </div>
    <br>
    <div class="container">
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
            <br><br><h1 class='display-4 text-center' style='font-weight: 600; opacity: .4'>Tidak ada hasil untuk {{$search}}</h1>
        @endif
    </div>
@endsection