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
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('ContactPersoon');
            $table->string('LeverancierNummer');
            $table->string('Mobiel');
            $table->integer('contact_id')->references('id')->on('contacts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leveranciers');
    }
};
