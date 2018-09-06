<?php

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
        DB::table('users')->insert([
            'name' => 'renan',
            'email' => 'renan@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
