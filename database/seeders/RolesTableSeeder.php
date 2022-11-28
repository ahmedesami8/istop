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
            'rank'=>'1'

        ],[
            'name' => 'Admin',
            'rank'=>'2'
        ],[
            'name' => 'Manager',
            'rank'=>'3'
        ],[
            'name' => 'Teacher',
            'rank'=>'4'
        ],[
            'name' => 'Student ',
            'rank'=>'5'
        ]);
    }
}
