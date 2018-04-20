@extends('layouts.app')

@section('title', "Wisata dengan rating tertinggi")

@section('content')
    <div class="bg-bromo" style="padding: 0">
        <div class="faded-search text-white">
            <br><br>
            <h1 class="display-3" style="font-weight: 900">Wisata dengan rating tertinggi</h1>
        </div>
    </div>
    <br>
    <div class="container">
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
                                @if($ws->rate)
                                    <p> 
                                    @for($i = ($ws->rate - 1); $i > -1; $i-- )
                                        @if($i >= 0)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="fas fa-star-half"></i>
                                        @endif
                                    @endfor
                                    </p>
                                    <p>( {{$ws->rate}} )</p>
                                @else
                                    <p><i class="fas fa-star"></i> Belum ada rating<p>
                                @endif
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