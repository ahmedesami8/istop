<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@com',
            'password' => ('12345678'),
            'role_id' => 1,

        ])

        ;





        $this->call([
            RolesTableSeeder::class
        ]);
    }
}
