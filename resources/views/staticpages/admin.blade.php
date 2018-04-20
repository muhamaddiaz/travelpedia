@extends('layouts.app')

@section('title', 'Admin mode')

@section('content')
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="jumbotron bg-purple text-white">
                <h1 class="display-4">Administrator have Superpowers</h1>
                <p style="font-size: 1.4rem">{{Auth::user()->name}} (Travelpedia Admin)</p>
            </div>
            <p class="display-4" style="font-size: 2rem">Rekap data analis</p>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="card-title display-4">{{$wisata_total->total }}</h1>
                            <h2 class="card-title display-4" style="font-size: 2.2rem">Total destinasi wisata</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="card-title display-4"><?php echo $hotel_total->total ?></h1>
                            <h2 class="card-title display-4" style="font-size: 2.2rem">Total hotel</h2>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="card-title display-4"><?php echo $transport_total->total ?></h1>
                            <h2 class="card-title display-4" style="font-size: 2.2rem">Total transportasi</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="card-title display-4"><?php echo $wisata_favorit->lokasi_wisata ?></h1>
                            <h2 class="card-title display-4" style="font-size: 2.2rem">Wisata terbanyak</h2>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h3>Data Table</h3>
            <hr>
            <table class='table table-bordered'>
                <thead>
                    <tr><th colspan='5' class='text-center '>Table Wisata</th></tr>
                    <tr>
                        <th>ID Wisata</th>
                        <th>Nama Wisata</th>
                        <th>Lokasi Wisata</th>
                        <th colspan='2'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wisata as $ws)
                        <tr>
                            <td>{{$ws->id_wisata}}</td>
                            <td>{{$ws->nama_wisata}}</td>
                            <td>{{$ws->lokasi_wisata}}</td>
                            <td>
                                <form action="/admin/{{$ws->id_wisata}}/deleteWisata" method="post" id="delete_tag">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                    <button type="submit" class="btn btn-danger">Hapus Data</button>
                                </form>
                            </td>
                            <td>
                                <a class="btn btn-info" href="/admin/{{$ws->id_wisata}}/updateWisataView">Perbarui</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        </div>
            <div class="col-md-4 sticky-top">
                <div class="card bg-primary text-white">
                    <div class="card-header">
                        <h3 class="card-title" style='font-weight: 300'>Tambahkan Wisata</h3>
                    </div>
                    <div class="card-body">
                        <p class='card-text'>Dengan menggunakan fitur ini anda akan dapat dengan mudah untuk menambahkan beberapa wisata baru di lokasi yang anda tentukan</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" data-toggle='modal' data-target='#wisataModal'>Tambah wisata</button>
                    </div>
                </div>
                <br>
                <div class="card bg-danger text-white">
                    <div class="card-header">
                        <h3 class="card-title" style='font-weight: 300'>Tambahkan Hotel</h3>
                    </div>
                    <div class="card-body">
                        <p class='card-text'>Dengan menggunakan fitur ini anda akan dapat dengan mudah untuk menambahkan beberapa hotel baru di lokasi yang anda tentukan</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger" data-toggle='modal' data-target='#hotelModal'>Tambah hotel</button>
                    </div>
                </div>
                <br>
                <div class="card bg-info text-white">
                    <div class="card-header">
                        <h3 class="card-title" style='font-weight: 300'>Tambahkan Transport</h3>
                    </div>
                    <div class="card-body">
                        <p class='card-text'>Dengan menggunakan fitur ini anda akan dapat dengan mudah untuk menambahkan beberapa jurusan transportasi baru di lokasi yang anda tentukan</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info" data-toggle='modal' data-target='#transportModal'>Tambah transport</button>
                    </div>
                </div>
                <br>
                <div class="card bg-warning text-white">
                    <div class="card-header">
                        <h3 class="card-title" style='font-weight: 300'>Lihat semua data</h3>
                    </div>
                    <div class="card-body">
                        <p class='card-text'>Dengan menggunakan fitur ini anda akan dapat melihat seluruh data yang terdapat di database</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning text-white" href="{{route('admin.showAllData')}}">Lihat data</a>
                    </div>
                </div>
            </div>
        </div>
    <div id="wisataModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title">Tambahkan data wisata baru</h4>
                </div>
                <div class="modal-body">
                    <form action='/admin/insertWisata' method='post'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <input class="form-control" type="text" name="nama_wisata" placeholder="Nama wisata" required/>
                        <br>
                        <input class="form-control" type="text" name="lokasi_wisata" placeholder="Lokasi wisata" required/>
                        <br>
                        <textarea class="form-control" name="deskripsi_wisata" placeholder="Deskripsi wisata" required></textarea>
                        <br>
                        <input class="form-control" type="text" name="gambar_wisata" placeholder="Link gambar wisata" required/>
                        <br>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="hotelModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h4 class="modal-title">Tambahkan data hotel baru</h4>
                </div>
                <div class="modal-body">
                    <form action='/admin/insertHotel' method='post'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <input class="form-control" type="text" name="nama_hotel" placeholder="Nama hotel" required/>
                        <br>
                        <input class="form-control" type="text" name="lokasi_hotel" placeholder="Lokasi hotel" required/>
                        <br>
                        <textarea class="form-control" name="deskripsi_hotel" placeholder="Deskripsi hotel" required></textarea>
                        <br>
                        <input class="form-control" type="text" name="gambar_hotel" placeholder="Link gambar hotel" required/>
                        <br>
                        <input class="form-control" type="number" name="kapasitas_hotel" placeholder="Kapasitas hotel" required/>
                        <br>
                        <button type="submit" class="btn btn-danger">Kirim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>              
                </div>
            </div>
        </div>
    </div>
    <div id="transportModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h4 class="modal-title">Tambahkan data transport baru</h4>
                </div>
                <div class="modal-body">
                    <form action='/admin/insertTransport' method='post'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <input class="form-control" type="text" name="nama_transport" placeholder="Nama transport" required/>
                        <br>
                        <input class="form-control" type="text" name="jenis_transport" placeholder="Jenis transport" required/>
                        <br>
                        <input class="form-control" type="text" name="tujuan_transport" placeholder="Tujuan transport" required/>
                        <br>
                        <input class="form-control" type="text" name="gambar_transport" placeholder="Link gambar hotel" required/>
                        <br>
                        <input class="form-control" type="number" name="kapasitas_transport" placeholder="Kapasitas transport" required/>
                        <br>
                        <button type="submit" class="btn btn-info">Kirim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection