<?php

use Illuminate\Database\Seeder;

use App\Models\Album;

class SeedAlbumTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        factory(App\Models\Album::class, 10)->create();
    }
}
