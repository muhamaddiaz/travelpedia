@extends('layouts.app')

@section('title', 'Update Wisata')

@section('content')
<div class="jumbotron jumbotron-fluid bg-info text-white">
    <div class="container-fluid">
        <br><br>
        <h1>Update data Wisata</h1>
        <h3>{{$wisata->nama_wisata}}</h3>
    </div>
</div>
<div class="container">
    <form action="/admin/{{$wisata->id_wisata}}/updateWisata" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input class="form-control" type="text" name="nama_wisata" value="{{$wisata->nama_wisata}}" required/>
        <br>
        <input class="form-control" type="text" name="lokasi_wisata" value="{{$wisata->lokasi_wisata}}" required/>
        <br>
        <textarea class="form-control" name="deskripsi_wisata" required>{{$wisata->deskripsi_wisata}}</textarea>
        <br>
        <input class="form-control" type="text" name="gambar_wisata" value="{{$wisata->link_image}}" required/>
        <br>
        <button type="submit" class="btn btn-primary">Update data</button>
    </form>
</div>
@endsection