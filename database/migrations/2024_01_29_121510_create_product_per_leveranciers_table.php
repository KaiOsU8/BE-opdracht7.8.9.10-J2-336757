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
        Schema::create('product_per_leveranciers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('LeverancierId');
            $table->foreign('LeverancierId')->references('id')->on('leveranciers');
            $table->unsignedBigInteger('ProductId');
            $table->foreign('ProductId')->references('id')->on('products');
            $table->date('DatumLevering');
            $table->integer('Aantal');
            $table->date('DatumEerstVolgendeLevering')->nullable();
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
        Schema::dropIfExists('product_per_leveranciers');
    }
};
