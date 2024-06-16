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
            $table->unsignedBigInteger('ContactId');
            $table->foreign('ContactId')->references('id')->on('contacts');
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerking')->nullable();
            $table->timestamp('DatumAangemaakt', 0)->nullable();
            $table->timestamp('DatumGewijzigd', 0)->nullable();
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
