<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name' => 'Fruit',
                'enable' => 1
            ], [
                'name' => 'Vegetable',
                'enable' => 1
            ]
        ]);
    }
}
