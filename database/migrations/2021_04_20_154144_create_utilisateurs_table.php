<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->integer('numCin');
            $table->string('adresse');
            $table->integer('numTel');
            $table->string('occupation');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //$table->rememberToken();
            $table->integer('proposition_id')->unsigned();
            $table->integer('evenement_id')->unsigned();
            $table->timestamps();
            $table->foreign('proposition_id')->references('id')->on('propositions')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('evenement_id')->references('id')->on('evenements')->onDelete('restrict')->onUpdate('restrict');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
