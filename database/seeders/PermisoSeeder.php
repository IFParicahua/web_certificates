<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permits')->insert([
            'guardar'=>'1',
            'editar'=>'1',
            'generar'=>'1',
            'user_id'=>'1',
            'rol_id'=>'1',
        ]);
    }
}
