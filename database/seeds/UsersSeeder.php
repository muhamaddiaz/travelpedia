<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Muhamad Diaz', 
            'email' => 'muhamaddiaz10'.'@gmail.com',
            'admin' => 1,
            'password' => bcrypt('secret'),
        ]);
    }
}
