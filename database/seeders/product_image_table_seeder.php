<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_image_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_image')->insert([
            [
                'product_id' => 1,
                'image_id' => 1
            ], [
                'product_id' => 2,
                'image_id' => 2
            ]
        ]);
    }
}
