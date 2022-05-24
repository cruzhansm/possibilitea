<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
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
                'sub_name' => '99 Meals & Single Orders',
                'category_id' => 1,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Soup',
                'category_id' => 1,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Pizza & Pasta',
                'category_id' => 1,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Sandwiches',
                'category_id' => 1,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Sides & Add Ons',
                'category_id' => 1,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Milktea & Frappe',
                'category_id' => 2,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Smoothies & Milkshake',
                'category_id' => 2,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Yogurt & Coffee',
                'category_id' => 2,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Lemonade & Fruitea',
                'category_id' => 2,
                'status' => 'ACTIVE',
            ),
            array(
                'sub_name' => 'Others',
                'category_id' => 2,
                'status' => 'ACTIVE',
            ),
        );
        DB::table('subcategories')->insert($data); 
    }
}
