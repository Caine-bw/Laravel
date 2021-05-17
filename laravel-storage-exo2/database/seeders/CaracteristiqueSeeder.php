<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracteristique')->insert([
            'nom' =>'Caine',
            'chiffres' =>'34',
            'icone' =>'tu seras une icone',
        ]);
    }
}
