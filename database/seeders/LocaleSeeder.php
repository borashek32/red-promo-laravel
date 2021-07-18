<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locales')->insert([
            [
                'place' => 'Москва'
            ],
            [
                'place' => 'Санкт-Петербург'
            ]
        ]);
    }
}
