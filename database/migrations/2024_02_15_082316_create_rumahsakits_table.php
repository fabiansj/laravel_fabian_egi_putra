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
        Schema::create('rumahsakits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_rumahsakit', 100);
            $table->text('alamat');
            $table->string('email', 150)->foreignId();
            $table->bigInteger('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumahsakits');
    }
};
