<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'nom' =>'Caine',
            'image' =>'tu sera une image',
            'categorie' =>'crime',
            'description' =>'oui monsieur mahad me doit de l argent'
        ]);
    }
}
