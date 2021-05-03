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
            $table->bigIncrements('id');
            $table->string('nom');
<<<<<<< HEAD
            $table->string('date');
=======
            $table->date('date');
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
            $table->integer('nb_participant');
            $table->bIgInteger('id_ResponsableMedia')->unsigned()->index();
            $table->timestamps();
           $table->foreign('id_ResponsableMedia')->references('id')->on('resp_medias')->onDelete('restrict')->onUpdate('restrict');
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
