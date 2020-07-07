<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->string('description');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzs');
    }
}
