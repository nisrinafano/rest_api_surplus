<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name' => 'Apple',
                'description' => 'Fresh Apple',
                'enable' => 1
            ], [
                'name' => 'Spinach',
                'description' => 'Fresh Spinach',
                'enable' => 1
            ]
        ]);
    }
}
