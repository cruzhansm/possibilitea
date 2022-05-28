<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
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
                'item_id' => 1,
                'user_id' => 1,
                'quantity' => 2,
                'size' => '22oz',
                'price' => '99.00',
                'addon_id' => 1,
                'sugarlvl_id' => 3,
            ),
            array(
                'item_id' => 4,
                'user_id' => 1,
                'quantity' => 2,
                'size' => '22oz',
                'price' => '100.00',
                'addon_id' => 1,
                'sugarlvl_id' => null,
            ),
            array(
                'item_id' => 1,
                'user_id' => 1,
                'quantity' => 2,
                'size' => '22oz',
                'price' => '100.00',
                'addon_id' => 1,
                'sugarlvl_id' => 3,
            ),
            array(
                'item_id' => 1,
                'user_id' => 1,
                'quantity' => 2,
                'size' => '22oz',
                'price' => '99.00',
                'addon_id' => 1,
                'sugarlvl_id' => 3,
            ),
           
        );
            DB::table('cart_items')->insert($data);
    }
}
