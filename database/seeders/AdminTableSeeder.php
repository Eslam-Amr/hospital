<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('admins')->delete();
        // DB::table('admins')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('password'),
        // ]);
        DB::table('admins')->updateOrInsert(
            ['email' => 'admin@admin.com'], // Check if a record with this email exists
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password')
            ]
        );

    }
}
