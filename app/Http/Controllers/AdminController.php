<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index() {
        $wisata_total = DB::select("SELECT count(*) AS total FROM wisata");
        $hotel_total = DB::select("SELECT count(*) AS total FROM hotel");
        $transport_total = DB::select("SELECT count(*) AS total FROM transport");
        $wisata_favorit = DB::select("SELECT COUNT(nama_wisata), lokasi_wisata FROM `wisata` GROUP BY lokasi_wisata ORDER BY COUNT(nama_wisata) DESC LIMIT 1");
        $wisata = DB::select("SELECT * FROM wisata");
        $hotel = DB::select("SELECT * FROM hotel");
        $transport = DB::select("SELECT * FROM transport");
        $user = DB::select("SELECT * FROM users WHERE admin=0");
        return view('staticpages/admin', ['wisata_total' => $wisata_total[0], 
            'hotel_total' => $hotel_total[0],
            'transport_total' => $transport_total[0],
            'wisata_favorit' => $wisata_favorit[0],
            'wisata' => $wisata,
            'hotel' => $hotel,
            'transport' => $transport,
            'users' => $user]);
    }

    public function insertWisata(Request $request) {
        $nama_wisata = $request->nama_wisata;
        $lokasi_wisata = $request->lokasi_wisata;
        $deskripsi_wisata = $request->deskripsi_wisata;
        $link_image = $request->gambar_wisata;
        DB::insert("INSERT INTO wisata(nama_wisata, lokasi_wisata, deskripsi_wisata, link_image) VALUES(?, ?, ?, ?)", [
            $nama_wisata, 
            $lokasi_wisata, 
            $deskripsi_wisata, 
            $link_image]);
        return redirect()->route('admin');
    }

    public function updateWisataView($id) {
        $wisata = DB::select("SELECT * FROM wisata WHERE id_wisata=?", [$id]);
        return view('staticpages/updateWisataView', ['wisata' => $wisata[0]]);
    }

    public function updateWisata(Request $request, $id) {
        $nama_wisata = $request->nama_wisata;
        $lokasi_wisata = $request->lokasi_wisata;
        $deskripsi_wisata = $request->deskripsi_wisata;
        $gambar_wisata = $request->gambar_wisata;
        DB::update("UPDATE wisata SET nama_wisata=?, deskripsi_wisata=?, lokasi_wisata=?, link_image=? WHERE id_wisata=?", [
            $nama_wisata,
            $deskripsi_wisata,
            $lokasi_wisata,
            $gambar_wisata,
            $id
            ]);
        return redirect()->route('admin');
    } 

    public function deleteWisata(Request $request, $id) {
        DB::delete("DELETE FROM wisata WHERE id_wisata=?", [$id]);
        return redirect()->route('admin');
    }

    public function insertHotel(Request $request) {
        $nama_hotel = $request->nama_hotel;
        $lokasi_hotel = $request->lokasi_hotel;
        $deskripsi_hotel = $request->deskripsi_hotel;
        $link_image = $request->gambar_hotel;
        $kapasitas = $request->kapasitas_hotel;
        DB::insert("INSERT INTO hotel(nama_hotel, lokasi_hotel, deskripsi_hotel, link_image, kapasitas) VALUES(?, ?, ?, ?, ?)", [
            $nama_hotel, 
            $lokasi_hotel, 
            $deskripsi_hotel, 
            $link_image,
            $kapasitas]);
        return redirect()->route('admin');
    }

    public function updateHotelView($id) {
        $hotel = DB::select("SELECT * FROM hotel WHERE id_hotel=?", [$id]);
        return view('staticpages/updateHotelView', ['hotel' => $hotel[0]]);
    }

    public function updateHotel(Request $request, $id) {

    } 

    public function deleteHotel(Request $request, $id) {
        DB::delete("DELETE FROM hotel WHERE id_hotel=?", [$id]);
        return redirect()->route('admin');
    }

    public function insertTransport(Request $request) {
        $nama_transport = $request->nama_transport;
        $jenis_transport = $request->jenis_transport;
        $tujuan_transport = $request->tujuan_transport;
        $link_image = $request->gambar_transport;
        $kapasitas = $request->kapasitas_transport;
        DB::insert("INSERT INTO transport(nama_transport, jenis_transport, tujuan_transport, link_image, kapasitas) VALUES(?, ?, ?, ?, ?)", [
            $nama_transport, 
            $jenis_transport, 
            $tujuan_transport, 
            $link_image,
            $kapasitas]);
        return redirect()->route('admin');
    }

    public function updateTransportView($id) {
        $transport = DB::select("SELECT * FROM transport WHERE id_transport=?", [$id]);
        return view('staticpages/updateTransportView', ['transport' => $transport[0]]);
    }

    public function updateTransport(Request $request, $id) {

    } 

    public function deleteTransport(Request $request, $id) {
        DB::delete("DELETE FROM transport WHERE id_transport=?", [$id]);
        return redirect()->route('admin');
    }

    public function updateUserView($id) {
        $user = DB::select("SELECT * FROM users WHERE id=?", [$id]);
        return view('staticpages/updateUserView', ['user' => $user[0]]);
    }

    public function updateUser(Request $request, $id) {

    } 

    public function deleteUser(Request $request, $id) {
        DB::delete("DELETE FROM users WHERE id_user=?", [$id]);
        return redirect()->route('admin');
    }
}
