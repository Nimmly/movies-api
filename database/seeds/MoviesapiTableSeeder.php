<?php

use Illuminate\Database\Seeder;

class MoviesapiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Movie::class, 20)->create();
    }
}