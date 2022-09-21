<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John',
            'surname' => 'Smith',
            'email' => 'john@smith.com',
            'password' => '$2y$10$ORq4sRm0fPtfrtYueflTpu77decOVELlZ/eI4zX/38V92id0x1jxi',
            'isAdmin' => '1',
        ]);
    }
}
