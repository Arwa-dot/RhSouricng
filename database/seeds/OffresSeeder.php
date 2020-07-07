<?php

use Illuminate\Database\Seeder;

class OffresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\offre::class, 10)->create();


    }
}