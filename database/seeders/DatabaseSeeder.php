<?php

namespace Database\Seeders;

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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('roles')->insert([
            'name' => 'Basic User',
            'desc' => 'Basic User Privilieges'
        ]);

        DB::table('roles')->insert([
            'name' => 'Pro User',
            'desc' => 'Pro User Privilieges'
        ]);

        DB::table('roles')->insert([
            'name' => 'Administrator',
            'desc' => 'Admin User Privilieges'
        ]);
    }
}
