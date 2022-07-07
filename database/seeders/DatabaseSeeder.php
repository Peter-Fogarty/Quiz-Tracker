<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Peter Fogarty',
            'email' => 'me@me.com',
            'password' => bcrypt('bunyip164'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()]);
    }
}
