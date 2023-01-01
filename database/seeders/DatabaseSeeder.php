<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $admin = [
            'name' => 'admin',
            'akses' => 'admin',
            'email' => 'admin@gmail.com',
            'nohp' => '08129291921',
            'nohp_verified_at' => now(),
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ];

        $operator = [
            'name' => 'operator',
            'akses' => 'operator',
            'email' => 'operator@gmail.com',
            'nohp' => '08129291921',
            'nohp_verified_at' => now(),
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ];

        $wali = [
            'name' => 'wali',
            'akses' => 'wali',
            'email' => 'wali@gmail.com',
            'nohp' => '08129291921',
            'nohp_verified_at' => now(),
            'email_verified_at' => now(),
            'password' => bcrypt('password')
        ];

        User::create($admin);
        User::create($operator);
        User::create($wali);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
