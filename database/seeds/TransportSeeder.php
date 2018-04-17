<?php

use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transport')->insert([
            'nama_transport' => 'Garuda Indonesia', 
            'jenis_transport' => 'Pesawat',
            'tujuan_transport' => 'Semarang',
            'link_image' => 'https://bit.ly/2q2tUaB',
            'kapasitas' => 40
        ]);
    }
}
