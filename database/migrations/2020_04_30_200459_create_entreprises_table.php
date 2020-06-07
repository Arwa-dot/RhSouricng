<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nom_entreprise');
            $table->string('nom_fondateur');
            $table->dateTime('date_fondation');
            $table->string('num_tel');
            $table->string('email');
            $table->string('domaine');
            $table->string('site_web');
            $table->integer('nombre_employe');
            $table->string('adresse_complete');
            $table->text('description');
            $table->binary('image')->nullable();


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
        Schema::dropIfExists('entreprises');
    }
}
