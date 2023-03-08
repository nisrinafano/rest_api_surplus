<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class image_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert([
            [
                'name' => 'Apple',
                'file' => 'https://www.collinsdictionary.com/images/full/apple_158989157.jpg',
                'enable' => 1
            ], [
                'name' => 'Spinach',
                'file' => 'https://balidirectstore.com/wp-content/uploads/2018/08/b7c76508-94ae-4def-9b63-7e751f3787a6-Edited.jpg',
                'enable' => 1
            ]
        ]);
    }
}
