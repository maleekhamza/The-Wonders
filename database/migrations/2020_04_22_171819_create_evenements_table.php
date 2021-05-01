<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('date');
            $table->integer('nb_patricipant');
            $table->integer('statistique_id')->unsigned()->index();
            $table->bigInteger('responsableMedia_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('statistique_id')->references('id')->on('statistiques')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('responsableMedia_id')->references('id')->on('resp_medias')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
