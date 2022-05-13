<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemcategorySeeder extends Seeder
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
                'id' => 1,
                'itemcat_name' => '99 Meals',
                'subcategory_id' => 1,
            ),
            array(
                'id' => 2,
                'itemcat_name' => 'Single Orders',
                'subcategory_id' => 1,
            ),
            array(
                'id' => 3,
                'itemcat_name' => 'Soup',
                'subcategory_id' => 2,
            ),
            array(
                'id' => 4,
                'itemcat_name' => 'Paradise Pizza',
                'subcategory_id' => 3,
            ),
            array(
                'id' => 5,
                'itemcat_name' => 'Paradise Pasta',
                'subcategory_id' => 3,
            ),
            array(
                'id' => 6,
                'itemcat_name' => 'Paradise Sandwich',
                'subcategory_id' => 4,
            ),
            array(
                'id' => 7,
                'itemcat_name' => 'Sides',
                'subcategory_id' => 5,
            ),
            array(
                'id' => 8,
                'itemcat_name' => 'Add Ons',
                'subcategory_id' => 5,
            ),
            array(
                'id' => 9,
                'itemcat_name' => 'Milktea',
                'subcategory_id' => 6,
            ),
            array(
                'id' => 10,
                'itemcat_name' => 'Cheesecake',
                'subcategory_id' => 6,
            ),
            array(
                'id' => 11,
                'itemcat_name' => 'Cream Cheese',
                'subcategory_id' => 6,
            ),
            array(
                'id' => 12,
                'itemcat_name' => 'Frappe',
                'subcategory_id' => 6,
            ),
            array(
                'id' => 13,
                'itemcat_name' => 'Smoothies',
                'subcategory_id' => 7,
            ),
            array(
                'id' => 14,
                'itemcat_name' => 'Paradise Milkshake',
                'subcategory_id' => 7,
            ),
            array(
                'id' => 15,
                'itemcat_name' => 'Paradise Yogurt',
                'subcategory_id' => 8,
            ),
            array(
                'id' => 16,
                'itemcat_name' => 'Paradise Coffee',
                'subcategory_id' => 8,
            ),
            array(
                'id' => 17,
                'itemcat_name' => 'Paradise Lemonade',
                'subcategory_id' => 9,
            ),
            array(
                'id' => 18,
                'itemcat_name' => 'Fruitea',
                'subcategory_id' => 9,
            ),
            array(
                'id' => 19,
                'itemcat_name' => 'Other Drinks',
                'subcategory_id' => 10,
            ),
        );
        DB::table('item_categories')->insert($data);
    }
}
