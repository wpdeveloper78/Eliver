<?php

use Illuminate\Database\Seeder;

use App\Models\Product;

class SeedProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
    }
}
