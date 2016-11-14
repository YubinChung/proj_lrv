<?php

use Illuminate\Database\Seeder;

class FeaturedworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Featuredwork::truncate();
		factory('App\Featuredwork', 10)->create();
    }
}
