<?php

use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wisata')->insert([
            'nama_wisata' => 'Lawang Sewu', 
            'lokasi_wisata' => 'Semarang',
            'deskripsi_wisata' => 'Salah satu tempat wisata di kota semarang 
                                   yang memiliki sejarah pada masa penjajahan 
                                   belanda dan jepang, ini adalah salah satu 
                                   tempat wisata yang unik karena terdapat 
                                   1000 pintu didalamnya makanya diberi nama 
                                   lawang sewu kalo ga percaya itung sendiri 
                                   - sumber orang semarang asli (hanip)',
            'link_image' => 'https://bit.ly/2GyUqmj',
        ]);
    }
}
