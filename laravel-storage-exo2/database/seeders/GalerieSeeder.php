<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeries')->insert([
            'nom' =>'Og Bronson',
            'image' =>'tu sera une image',
            'description' =>'Bressoux c est gang'
        ]);
    }
}
