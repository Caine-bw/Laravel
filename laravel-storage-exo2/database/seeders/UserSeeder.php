<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' =>'Stonks',
            'prenom' =>'Mahad',
            'age' =>'22',
            'email'=>'MahadStonks@hotmail.com',
            'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'pdp'=>'Je te remplis avec une image',
        ]);
    }
}
