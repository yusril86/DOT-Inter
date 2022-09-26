<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'roles' => 'Admin',
            'password' =>  Hash::make('admin123')
        ]);
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user@gmail.com',
            'roles' => 'user',
            'password' =>  Hash::make('user123')
        ]);
    }
}
