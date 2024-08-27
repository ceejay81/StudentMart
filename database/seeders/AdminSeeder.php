<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'cjsprite81@gmail.com',
            'password' => Hash::make('password'), // Ensure to use a secure password
            'role' => 'admin', // Set role here
        ]);

        $adminUserId = DB::table('users')->where('email', 'cjsprite81@gmail.com')->first()->id;

        DB::table('admins')->insert([
            'user_id' => $adminUserId,
            'role' => 'super_admin', // or 'admin'
        ]);
    }
}
