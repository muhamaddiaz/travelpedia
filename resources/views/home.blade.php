@extends('layouts.app')

@section('content')
<div class="container-fluid bg-bromo" style="padding: 0">
    <div class="faded-main text-center text-white">
        <h1 class="display-2" style="font-weight: 700">Selamat datang, {{Auth::user()->name}}</h1>
        <h3 class="display-4">Mulailah liburan anda</h3>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br>
                <form action="{{route('cari.wisata')}}" method="get">
                    <input type="search" name="search" class="form-control" placeholder="Cari wisata" required/>
                    <br>
                    <button type="submit" class="btn btn-success mr-3"><i class="fas fa-search"></i> Cari wisata</button>
                    <a class="btn btn-primary" href="{{route('wisata.favorit')}}"><i class="fas fa-star"></i> Wisata favorit</a>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="search-ct">
        <form action="{{route('search')}}" method="post" onsubmit="return dateRequestValidate()">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="row">
                <div class="col-md-6">
                    <label>Dari: </label>
                    <select name="dari" class="form-control">
                        <option value="Bandung">Bandung</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Ke: </label>
                    <select name="ke" class="form-control">
                        @foreach($tujuan as $t)
                            <option value="{{$t->lokasi_wisata}}">{{$t->lokasi_wisata}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label>Infant: </label>
                    <input type="number" class="form-control" min="1" name="infant" placeholder="Untuk berapa orang ?" required/>
                </div>
                <div class="col-md-4">
                    <label>Tanggal keberangkatan: </label>
                    <input type="date" class="form-control" name="berangkat" id="berangkat" required/>
                </div>
                <div class="col-md-4">
                    <label>Tanggal pulang: </label>
                    <input type="date" class="form-control" name="pulang" id="pulang" required/>
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-search"></i> Search</button>
        </form>
    </div>
</div>
<br><br>
@endsection
