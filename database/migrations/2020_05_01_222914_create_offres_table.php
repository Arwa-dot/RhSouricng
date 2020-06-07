<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');

            $table->string('titre_emploi');
            $table->string('secteur_emploi');
            $table->string('type_emploi');
            $table->text('description');
            $table->date('date_publication');
            $table->date('date_limite');
            $table->string('mail_recruteur');
            $table->float('salaire_propose');
            $table->string('ville');

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
        Schema::dropIfExists('offres');
    }
}
