<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_port');
            $table->string('nom_port');
            $table->string('direction');
            $table->string('departement');
            $table->string('division');
            $table->string('equipement');
            $table->string('module');
            $table->string('carte');
            $table->unsignedBigInteger('carte_id');
            $table->foreign('carte_id')->references('id')->on('cartes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ports');
    }
}
