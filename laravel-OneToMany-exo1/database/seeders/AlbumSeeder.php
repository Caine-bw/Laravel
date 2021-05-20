<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("albums")->insert([
            "nom"=>"albums1",
            "description"=>"ceci est un albums"
        ]);

        DB::table("albums")->insert([
            "nom"=>"albums2",
            "description"=>"ceci est un albums2"
        ]);

        DB::table("albums")->insert([
            "nom"=>"albums3",
            "description"=>"ceci est un albums3"
        ]);
    }
}
