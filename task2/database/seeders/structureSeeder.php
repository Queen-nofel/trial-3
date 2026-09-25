<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class structureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('structures')->insert([
            [
                'name' => 'aisha',
                'email' => 'aisha@gmail.com',
                'password' =>'0987',
            ]
        ]);
    }
}
