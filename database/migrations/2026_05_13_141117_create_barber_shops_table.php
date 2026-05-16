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
Schema::create('barber_shops', function (Blueprint $table) {
    $table->id();

    $table->string('Shop_Name');

    $table->foreignId('Owner_ID')
          ->nullable()
          ->constrained('owners');

    $table->string('Location');

    $table->text('Description')->nullable();

    $table->string('Image')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barber_shops');
    }
};
