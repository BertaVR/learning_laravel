<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            ['nombre' => 'Oso de peluche',  'color' => '#ce5c00', 'precio' =>'12.20', 'material'=>'indestructible', 'repuesto_dia'=> now()],
            ['nombre' => 'Casa de muñecas',  'color' => '#ce5c15', 'precio' => '13.55','material'=>'consumible', 'repuesto_dia'=> now()],
            ['nombre' => 'Alformbra',  'color' => '#73d216', 'precio' => '40.00','material'=>'normal', 'repuesto_dia'=> now()],
        ]);
    }
}
