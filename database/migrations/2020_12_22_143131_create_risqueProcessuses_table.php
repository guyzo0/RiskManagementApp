<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisqueProcessusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risqueProcessuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->date('Date_creation');
            $table->string('redacteur');
            $table->text('participants');
            $table->string('valideur');
            $table->text('contexte');
            $table->string('perimetre');
            $table->text('consequence_metier');
            $table->text('manifestation_origine');
            $table->string('menace');
            $table->string('besoin_securite');
            $table->integer('niveau_impact');
            $table->string('type_menace');
            $table->integer('potentialite_intrinseque');
            $table->text('justification_potentialite_intrinseque');
            $table->integer('gravite_intrinseque');
            $table->string('label_gravite_intrinseque');
            $table->text('mesures_confinement');
            $table->integer('efficacite_mesures_confininement');
            $table->text('mesures_palliation');
            $table->integer('efficacite_mesures_palliation');
            $table->integer('impact_actuel');
            $table->integer('impact_residuel');
            $table->text('mesures_dissuation');
            $table->integer('efficacite_mesures_dissuation');
            $table->text('mesures_prevention');
            $table->integer('efficacite_mesures_prevention');
            $table->integer('potentialite_actuel');
            $table->integer('potentialite_residuel');
            $table->integer('niveau_gravite');
            $table->string('label_gravite');
            $table->string('preconisations1');
            $table->integer('efficacite_preconisations1');
            $table->string('preconisation2');
            $table->integer('efficacite_preconisation2');
            $table->boolean('validation')->default(false);
            $table->timestamps();
            $table->bigInteger('processus_id')->unsigned()->index();
            $table->foreign('processus_id')->references('id')->on('processuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risqueProcessuses');
    }
}
