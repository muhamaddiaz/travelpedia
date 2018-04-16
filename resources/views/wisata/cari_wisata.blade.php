@extends('layouts.app')

@section('title', "Pencarian untuk {{$search}}")

@section('content')
    <div class="bg-bromo" style="padding: 0">
        <div class="faded-search text-white">
            <br>
            <h1 class="display-3" style="font-weight: 900">Hasil untuk {{$search}}</h1>
        </div>
    </div>
    <br>
    <div class="container">
        @if($wisata)
            @foreach($wisata as $wis)
            <div class='card'>
                <div class='card-body'>
                    <div class='row'>
                        <div class='col-md-4'>
                            <img src="{{$wis->link_image}}" style="width: 100%" />
                        </div>
                        <div class='col-md-8'>
                            <h2 class=card-title>{{$wis->nama_wisata}}</h2>
                            <p class=card-text>{{$wis->deskripsi_wisata}}</p>
                        </div>
                    </div>
                </div>
                <div class='card-footer'>
                    <a href="wisata/{{$wis->id_wisata}}" class="btn btn-info btn-block">Selengkapnya</a>
                </div>
            </div><br>
            @endforeach
        @else
            <br><br><h1 class='display-4 text-center' style='font-weight: 600; opacity: .4'>Tidak ada hasil untuk {{$search}}</h1>
        @endif
    </div>
@endsection