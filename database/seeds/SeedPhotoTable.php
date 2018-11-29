<?php

use Illuminate\Database\Seeder;


class SeedPhotoTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Photo::class, 200)->create();
    }
}
