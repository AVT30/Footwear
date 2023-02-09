<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chaussures', function (Blueprint $table) {
            $table->id('id_chaussure');
            $table->string('modele')->unique();
            $table->string('marque');
            $table->string('type');
            $table->string('couleurP');
            $table->string('couleurS');
            $table->varchar('prix');
            
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
        Schema::dropIfExists('chaussures');
    }
};
