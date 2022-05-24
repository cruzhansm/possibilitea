<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddonsSeeder extends Seeder
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
                'add_name' => 'Tapioca',
            ),
            array(
                'add_name' => 'Nata',
            ),
            array(
                'add_name' => 'Oreo',
            ),
            array(
                'add_name' => 'Coffee Jelly',
            ),
            array(
                'add_name' => 'Pudding',
            ),
            array(
                'add_name' => 'Red Bean',
            ),
            array(
                'add_name' => 'Cream Cheese',
            ),
            array(
                'add_name' => 'Cheese Cake',
            ),
        );
        DB::table('addons')->insert($data);
    }
}
