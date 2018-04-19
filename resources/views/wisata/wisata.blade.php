@extends('layouts.app')

@section('title', 'Travel')

@section('content')
    <div class="wisata-bg" style="background-image: url({{$wisata->link_image}}), url({{asset('images/bromo.jpg')}}); background-size: cover"></div>
    <div class="row">
        <div class="col-md-6" style="background-color: rgba(86, 61, 124, 0.8);">
            <div class="wisata-ct1 text-white text-center">
                <h1 class="display-3" style="font-weight: 700">{{$wisata->nama_wisata}}</h1>
                <p style="font-size: 2rem">{{$wisata->lokasi_wisata}}</p>
                @if($rating->rate) 
                    <p><i class="fas fa-star"></i> ( {{$rating->rate}} ) dari ( {{$count_rate->ct_rate}} ulasan)<p>
                @else
                    <p><i class="fas fa-star"></i> ( 0 ) Belum ada rating<p>
                @endif
                @if(Auth::user())
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ulasan">
                        Beri Rating
                    </button>
                    @if($user_rate)
                        <p>Anda memberikan rating {{$user_rate[0]->rate}} </p>
                    @else
                        <p>Anda belum memberikan rating </p>
                    @endif
                @endif
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
                                            <form action="{{route('wisata.hapusKomen')}}" method="post" style="display: inline-block">
                                                <input type='hidden' name='_token' value="{{csrf_token()}}" />
                                                <input type="hidden" name="id_hapus" value="{{$komen->id_komentar}}" />
                                                <input type='hidden' name='id_wisata' value="{{$wisata->id_wisata}}" />
                                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        @endif
                                    @endif
                                    <button type="submit" class="btn btn-info"><i class="fas fa-reply"></i></button>
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
                        <button type='submit' class='btn btn-success'><i class="far fa-comments"></i> Comment</button>
                    </form>
                @endif
                <br>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ulasan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Berikan rating terhadap wisata</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/wisata/{{$wisata->id_wisata}}/rate" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <label>1 <input type="radio" value="1" name="rate" />&nbsp; &nbsp; </label>
                        <label>2 <input type="radio" value="2" name="rate" />&nbsp; &nbsp; </label>
                        <label>3 <input type="radio" value="3" name="rate" />&nbsp; &nbsp; </label>
                        <label>4 <input type="radio" value="4" name="rate" />&nbsp; &nbsp; </label>
                        <label>5 <input type="radio" value="5" name="rate" />&nbsp; &nbsp; </label>
                        <br><br>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-star"></i> Rate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection