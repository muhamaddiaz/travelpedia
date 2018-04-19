@extends('layouts.app')

@section('title', 'Update Hotel')

@section('content')
<div class="jumbotron jumbotron-fluid bg-info text-white">
    <div class="container-fluid">
        <br><br>
        <h1>Update data Hotel</h1>
        <h3>{{$hotel->nama_hotel}}</h3>
    </div>
</div>
<div class="container">
    <form action="/admin/{{$hotel->id_hotel}}/updateWisata" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input class="form-control" type="text" name="nama_hotel" value="{{$hotel->nama_hotel}}" required/>
        <br>
        <input class="form-control" type="text" name="lokasi_hotel" value="{{$hotel->lokasi_hotel}}" required/>
        <br>
        <textarea class="form-control" name="deskripsi_hotel" required>{{$hotel->deskripsi_hotel}}</textarea>
        <br>
        <input class="form-control" type="text" name="gambar_hotel" value="{{$hotel->link_image}}" required/>
        <br>
        <input class="form-control" type="number" name="kapasitas" value="{{$hotel->kapasitas}}" required/>
        <br>
        <button type="submit" class="btn btn-primary">Update data</button>
    </form>
</div>
@endsection