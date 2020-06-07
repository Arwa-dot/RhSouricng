<?php

use App\Entreprise;
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
        factory(App\Offre::class, 10)->create();
        factory(App\Entreprise::class, 10)->create();



    }
}
