<?php

use Illuminate\Database\Seeder;

use App\User;

class SeedUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

      factory(App\User::class, 30)->create();
    }
}
