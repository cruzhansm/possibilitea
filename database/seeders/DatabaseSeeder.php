<?php

namespace Database\Seeders;

use App\Models\Addons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            ItemCategorySeeder::class,
            ItemSeeder::class,
            SugarLvlSeeder::class,
            AddonsSeeder::class,
            TransactionSeeder::class,
            CartItemSeeder::class,
        ]);
    }
}
