@extends('layouts.app')

@section('title', 'Travel')

@section('content')
    <div class="wisata-bg" style="background-image: url({{$wisata->link_image}}); background-size: cover"></div>
    <div class="row">
        <div class="col-md-6" style="background-color: rgba(86, 61, 124, 0.8);">
            <div class="wisata-ct1 text-white text-center">
                <h1 class="display-3" style="font-weight: 700">{{$wisata->nama_wisata}}</h1>
                <p style="font-size: 2rem">{{$wisata->lokasi_wisata}}</p>
            </div>
        </div>
        <div class="col-md-6" style="background-color: white">
            <div class="wisata-ct2">
                <br><br><br>
                <h2 class="display-4" style="color: rgb(86, 61, 124)">Sekilas tentang {{$wisata->nama_wisata}}</h2>
                <hr>
                <p>{{$wisata->deskripsi_wisata}}</p>
                <p>Comment:</p>
                <hr>
                    @if($comment)
                        @foreach($comment as $komen)
                            <?php $user = DB::select("SELECT * FROM users WHERE id=(?)", [$komen->id_user]) ?>
                            <div class="card">
                                <div class="card-body">{{$komen->isi_komentar}}</div>
                                <div class="card-footer">
                                    <p>Commented by - <?php echo $user[0]->name ?></p>
                                    @if(Auth::user())
                                        @if(Auth::user()->id == $komen->id_user)
                                            <form action="{{route('wisata.hapusKomen')}}" method="post">
                                                <input type='hidden' name='_token' value="{{csrf_token()}}" />
                                                <input type="hidden" name="id_hapus" value="{{$komen->id_komentar}}" />
                                                <input type='hidden' name='id_wisata' value="{{$wisata->id_wisata}}" />
                                                <button type="submit" class="btn btn-danger">Hapus komen</button>
                                            </form>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <br>
                        @endforeach
                    @else
                        <h2>Belum ada komentar</h2>
                    @endif
                <hr>
                @if(Auth::user())
                    <form action="{{route('wisata.comment')}}" method='post'>
                        <input type='hidden' name='_token' value="{{csrf_token()}}" />
                        <input type='hidden' name='id_user' value="{{Auth::user()->id}}" />
                        <input type='hidden' name='id_wisata' value="{{$wisata->id_wisata}}" />
                        <textarea name='comment' class='form-control' placeholder='Comment tentang destinasi ini' required></textarea>
                        <br>
                        <button type='submit' class='btn btn-success'>Comment</button>
                    </form>
                @endif
                <br>
            </div>
        </div>
    </div>
@endsection