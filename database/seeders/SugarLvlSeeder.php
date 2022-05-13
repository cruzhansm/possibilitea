<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SugarLvlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'sugar_lvl' => '25%',
            ),
            array(
                'sugar_lvl' => '50%',
            ),
            array(
                'sugar_lvl' => '75%',
            ),
            array(
                'sugar_lvl' => '100%',
            )
        );

        DB::table('sugar_lvls')->insert($data);
    }
}
