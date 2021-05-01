<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsableIsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsable_iset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('salle_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('salle_id')->references('id')->on('salle')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsable_iset');
    }
}
