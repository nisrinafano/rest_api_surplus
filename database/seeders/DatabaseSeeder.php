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
        $this->call(category_table_seeder::class);
        $this->call(product_table_seeder::class);
        $this->call(image_table_seeder::class);
        $this->call(category_product_table_seeder::class);
        $this->call(product_image_table_seeder::class);
    }
}
