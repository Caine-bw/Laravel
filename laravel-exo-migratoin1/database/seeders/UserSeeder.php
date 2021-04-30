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
            "name"=> "Abdel",
            "email"=>"Abdel@icloud.com",
            "password"=>"testtest",
            "created_at"=>now(),
       ]);
       DB::table('users')->insert([
        "name"=> "Mahad",
        "email"=>"Mahad@icloud.com",
        "password"=>"Mahadmahad",
        "created_at"=>now(),
        ]);
        DB::table('users')->insert([
            "name"=> "Selim",
            "email"=>"Selim@icloud.com",
            "password"=>"selimselim",
            "created_at"=>now(),
       ]);
    }
}
