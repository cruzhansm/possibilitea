<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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
                'username' => 'adminUser',
                'fname' => 'admin',
                'lname' => 'user',
                'password' => Hash::make('admin'),
                'role' => 'ADMIN',
                'status' => 'ACTIVE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'marcvaleros',
                'fname' => 'marc',
                'lname' => 'valeros',
                'password' => Hash::make('marc'),
                'role' => 'STAFF',
                'status' => 'ACTIVE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'erikceldran',
                'fname' => 'erik',
                'lname' => 'celdran',
                'password' => Hash::make('erik'),
                'role' => 'STAFF',
                'status' => 'ACTIVE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'username' => 'keylperez',
                'fname' => 'keyl',
                'lname' => 'perez',
                'password' => Hash::make('keylawesome'),
                'role' => 'STAFF',
                'status' => 'ACTIVE',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
          
        );
        DB::table('users')->insert($data);
    }
}
