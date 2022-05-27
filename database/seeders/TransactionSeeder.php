<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
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
                'user_id' => 2,
                'amount'  => 1000.00,
                'dateTime' => '2020-05-10 06:11:09'
            ),
            array(
                'user_id' => 3,
                'amount'  => 500.00,
                'dateTime' => '2021-05-11 06:11:09'
            ),
            array(
                'user_id' => 3,
                'amount'  => 400.00,
                'dateTime' => '2022-05-12 09:11:09'
            ),
            array(
                'user_id' => 2,
                'amount'  => 1200.00,
                'dateTime' => '2022-05-13 08:11:09'
            )
        );
        
        DB::table('transactions')->insert($data);
    }
}
