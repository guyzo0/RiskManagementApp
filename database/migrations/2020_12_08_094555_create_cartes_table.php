<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('cartes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_carte');
            $table->string('direction');
            $table->string('departement');
            $table->string('division');
            $table->string('equipement');
            $table->string('module');
            $table->bigInteger('module_id')->unsigned()->index();
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
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
        Schema::dropIfExists('cartes');
    }
}
