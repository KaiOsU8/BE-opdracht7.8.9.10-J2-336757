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
        Schema::create('product_per_allergeens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductId');
            $table->unsignedBigInteger('AllergeenId');
            $table->foreign('ProductId')->references('id')->on('products');
            $table->foreign('AllergeenId')->references('id')->on('allergeens');
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
        Schema::dropIfExists('product_per_allergeens');
    }
};
