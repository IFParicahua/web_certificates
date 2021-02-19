<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dimensions')->insert([
            'dimension'=>'8MM x 12M',
            'alias'=>'8MM x 12M',
        ]);
    }
}
