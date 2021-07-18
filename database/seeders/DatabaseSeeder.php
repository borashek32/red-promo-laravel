<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(LocaleSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(LocalePostSeeder::class);
//        \App\Models\LocalePost::factory(10)->create();
    }
}
