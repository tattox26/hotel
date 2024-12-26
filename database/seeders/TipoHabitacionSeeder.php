<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoHabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_habitacions')->insert([
            ['id' => '1' , 'nombre' => 'Estandar'],
            ['id' => '2' , 'nombre' => 'Junior'],
            ['id' => '3' , 'nombre' => 'Suite'],                        
        ]);
    }
}
