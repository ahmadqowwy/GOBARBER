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
       Schema::create('barbers', function (Blueprint $table) {
    $table->id();

    $table->foreignId('shop_id')
          ->constrained('barbershops')
          ->onDelete('cascade');

    $table->string('barber_name');
    $table->string('specialty');
    $table->string('image')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barbers');
    }
};
