<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('go_barber_shops', function (Blueprint $table) {
            $table->id('shop_id');
            $table->foreignId('owner_id')->constrained('owners', 'owner_id')->onDelete('cascade');
            $table->string('shop_name');
            $table->string('location');
            $table->text('description')->nullable();
            $table->longText('photo')->nullable();
            $table->time('open_time');
            $table->time('close_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('go_barber_shops');
    }
};