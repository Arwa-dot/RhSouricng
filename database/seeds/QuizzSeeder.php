<?php

use Illuminate\Database\Seeder;
use App\Quizz;

class QuizzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Quizz::class, 10)->create();
    }
}
