<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

            'name' => 'Super Admin',
            'rank'=> 1

        ]);
        DB::table('roles')->insert([


            'name' => 'Admin',
            'rank'=> 2

        ]);
        DB::table('roles')->insert([


            'name' => 'Manager',
            'rank'=> 3

        ]);
        DB::table('roles')->insert([


            'name' => 'Teacher',
            'rank'=> 4

        ]);
        DB::table('roles')->insert([


            'name' => 'Student ',
            'rank'=> 5

        ]);

    }
}
