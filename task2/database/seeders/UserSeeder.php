<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('structures')->insert([
            'name'=>'aisha',
            'email'=>'aisha@gmail.com',
            'password'=>Hash::make('0987'),
        ]);
    }
}
