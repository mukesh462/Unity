<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('admin_users')->insert([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'username' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'user_type' => 1
            // Hash the password for security
        ]);
    }
}
