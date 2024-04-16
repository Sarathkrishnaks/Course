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
        Schema::create('id_cards', function (Blueprint $table) {
                $table->id();
                $table->string('id_number');
                $table->dateTime('issue_date')->nullable();
                $table->bigInteger('individual_id')->unsigned();
                $table->timestamps();
    
                $table->foreign('individual_id')->references('id')->on('individuals')
                ->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_cards');
    }
};
