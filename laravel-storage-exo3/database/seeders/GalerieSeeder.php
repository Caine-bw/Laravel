<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("galeries")->insert([
            'nom'=>'Galerie',
            'image'=>'je vais mettre une image',
            'description'=>'Une description'
        ]);
        DB::table("galeries")->insert([
            'nom'=>'Galerie',
            'image'=>'je vais mettre une image',
            'description'=>'Une description'
        ]);
        DB::table("galeries")->insert([
            'nom'=>'Galerie',
            'image'=>'je vais mettre une image',
            'description'=>'Une description'
        ]);
    }
}
