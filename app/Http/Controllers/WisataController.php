<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    public function intro() 
    {
        return view('staticpages/index');
    }

    public function wisata(Request $request, $id) {
        $id_wisata = $id;
        $komentar = DB::select("SELECT * FROM komentar WHERE id_wisata=$id_wisata");
        $wisata = DB::select("select * from wisata where id_wisata=(?) LIMIT 1", [$id_wisata]);
        return view('wisata/wisata', ['wisata' => $wisata[0], 'comment' => $komentar]);
    }

    public function cari(Request $request) {
        $dari = $request->dari;
        $ke = $request->ke;
        $infant = $request->infant;
        $berangkat = $request->berangkat;
        $pulang = $request->pulang;
        $hotel = DB::select("SELECT * FROM hotel WHERE lokasi_hotel LIKE (?)", [$ke]);
        $transport = DB::select("SELECT * FROM transport WHERE tujuan_transport LIKE (?)", [$ke]);
        $wisata = DB::select("SELECT * FROM wisata WHERE lokasi_wisata LIKE (?)", [$ke]);
        return view('wisata/cari', [
            'hotel' => $hotel, 
            'transport' => $transport, 
            'wisata' => $wisata,
            'dari' => $dari,
            'ke' => $ke,
            'infant' => $infant,
            'berangkat' => $berangkat,
            'pulang' => $pulang
        ]);
    }

    public function cariWisata(Request $request) {
        $search = $request->search;
        $wisata = DB::select('select * from wisata where lokasi_wisata like (?)', [$search]);
        return view('wisata/cari_wisata', ['search' => $search, 'wisata' => $wisata]);
    }

    public function commentWisata(Request $request) {
        $id_user = $request->id_user;
        $id_wisata = $request->id_wisata;
        $comment = $request->comment;
        DB::insert("INSERT INTO komentar(id_wisata, id_user, isi_komentar) VALUES(?, ?, ?)", [$id_wisata, $id_user, $comment]);
        return redirect()->route("wisata", ['id' => $id_wisata]);
    }

    public function hapusComment(Request $request) {
        $id_hapus = $request->id_hapus;
        $id_wisata = $request->id_wisata;
        DB::delete("DELETE FROM komentar WHERE id_komentar=(?)", [$id_hapus]);
        return redirect()->route("wisata", ['id' => $id_wisata]);
    }
}
