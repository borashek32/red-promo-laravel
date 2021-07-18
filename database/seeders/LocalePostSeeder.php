<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locale_post')->insert([
            [
                'locale_id' => '1',
                'post_id' => '1'
            ],
            [
                'locale_id' => '1',
                'post_id' => '2'
            ],
            [
                'locale_id' => '2',
                'post_id' => '2'
            ],
            [
                'locale_id' => '2',
                'post_id' => '3'
            ],
            [
                'locale_id' => '1',
                'post_id' => '3'
            ],
            [
                'locale_id' => '2',
                'post_id' => '4'
            ]
        ]);
    }
}
