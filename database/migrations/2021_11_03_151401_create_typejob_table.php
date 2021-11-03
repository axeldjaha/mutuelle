<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypejobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_typejob', function (Blueprint $table) {
            $table->tinyIncrements("id");
            $table->string("libelle", 255);
            $table->string("nomjobtalend", 255);
            $table->string("commande", 255);
            $table->tinyInteger("jobunique");
            $table->tinyInteger("estimport");

            $table->tinyInteger("active")->default(1);
            $table->integer("version")->default(1);
            $table->dateTime("creation_date")->nullable();
            $table->dateTime("modification_date")->nullable();
            $table->macAddress("creation_hostname")->nullable();
            $table->string("modification_hostname")->nullable();
            $table->string("creation_username", 50)->nullable();
            $table->string("modification_username", 50)->nullable();
            $table->integer("utilisateur_creation_id")->nullable();
            $table->integer("utilisateur_modification_id")->nullable();
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
        Schema::dropIfExists('t_typejob');
    }
}
