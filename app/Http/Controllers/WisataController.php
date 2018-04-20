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
        $rate = DB::select("SELECT AVG(rate) AS rate FROM rating WHERE id_wisata=?", [$id]);
        $count_rate = DB::select("SELECT count(*) AS ct_rate FROM rating WHERE id_wisata=?", [$id]);
        $user_rate = '';
        if(Auth::user()) {
            $user_rate = DB::select("SELECT rate FROM rating WHERE id_user=? AND id_wisata=?", [Auth::user()->id, $id]);
        }
        return view('wisata/wisata', [
            'wisata' => $wisata[0], 
            'comment' => $komentar, 
            'rating' => $rate[0], 
            'count_rate' => $count_rate[0],
            'user_rate' => $user_rate
        ]);
    }

    public function rate(Request $request, $id) {
        $id_wisata = $id;
        $rate = $request->rate;
        if(Auth::user()) {
            $has_rate = DB::select("SELECT * FROM rating WHERE id_user=? AND id_wisata=?", [Auth::user()->id, $id]);
            if(!($has_rate)) {
                DB::insert("INSERT INTO rating(id_user, id_wisata, rate) VALUES(?, ?, ?)", [Auth::user()->id, $id, $rate]);
            } else {
                DB::update("UPDATE rating SET rate=? WHERE id_user=? AND id_wisata=?", [$rate, Auth::user()->id, $id]);
            }
        }
        return redirect()->route("wisata", ['id' => $id_wisata]);
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
        $wisata_count = DB::select("SELECT count(*) AS hitung FROM wisata WHERE lokasi_wisata like ?", [$search]);
        return view('wisata/cari_wisata', [
            'search' => $search, 
            'wisata' => $wisata,
            'wisata_count' => $wisata_count[0]
        ]);
    }

    public function commentWisata(Request $request) {
        $id_user = $request->id_user;
        $id_wisata = $request->id_wisata;
        $comment = $request->comment;
        DB::insert("INSERT INTO komentar(id_wisata, id_user, isi_komentar) VALUES(?, ?, ?)", [$id_wisata, $id_user, $comment]);
        return redirect()->route("wisata", ['id' => $id_wisata]);
    }

    public function replyComment(Request $request, $id) {
        $id_user = $request->id_user;
        $id_komentar = $id;
        $id_wisata = $request->id_wisata;
        $comment = $request->comment;
        DB::insert("INSERT INTO reply_komentar(id_komentar, id_user, isi_komentar) VALUES(?, ?, ?)", [$id_komentar, $id_user, $comment]);
        return redirect()->route("wisata", ['id' => $id_wisata]);
    }

    public function hapusComment(Request $request) {
        $id_hapus = $request->id_hapus;
        $id_wisata = $request->id_wisata;
        DB::delete("DELETE FROM komentar WHERE id_komentar=(?)", [$id_hapus]);
        return redirect()->route("wisata", ['id' => $id_wisata]);
    }

    public function hapusReply(Request $request) {
        $id_hapus = $request->id_hapus;
        $id_wisata = $request->id_wisata;
        DB::delete("DELETE FROM reply_komentar WHERE id_reply=(?)", [$id_hapus]);
        return redirect()->route("wisata", ['id' => $id_wisata]);
    }
}
