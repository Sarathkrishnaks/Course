<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('individual_sports', function (Blueprint $table) {
           $table->primary(['individal_id','sport_id']);
           $table->bigInteger('individual_id')->unsigned();
           $table->bigInteger('sport_id')->unsigned();

           $table->foreign('individual_id')->references('id')->on('individuals')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('sport_id')->references('id')->on('sports')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individual_sports');
    }
};
