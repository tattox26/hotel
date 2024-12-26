<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcomodacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acomodacions')->insert([
            ['id' => '1' , 'nombre' => 'Sencilla'],
            ['id' => '2' , 'nombre' => 'Doble'],
            ['id' => '3' , 'nombre'  => 'Triple'],
            ['id' => '4' , 'nombre'  => 'Cuadruple'],            
        ]);
    }
}
