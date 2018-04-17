<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel')->insert([
            'nama_hotel' => 'Louis Kienne', 
            'deskripsi_hotel' => 'Salah satu hotel mewah berbintang 4 
                                  di semarang lokasi di strategis di 
                                  tengah kota',
            'link_image' => 'https://bit.ly/2q3oQmx',
            'lokasi_hotel' => 'Semarang',
            'kapasitas' => 40
        ]);
    }
}
