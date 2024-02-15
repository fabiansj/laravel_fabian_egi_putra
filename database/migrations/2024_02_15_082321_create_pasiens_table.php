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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pasien', 100);
            $table->text('alamat');
            $table->bigInteger('phone');
            $table->foreignId('rumah_sakit_id')->constrained('rumahsakits');
            // $table->foreignId('rumah_saklt_id')->references('id')->on('rumahsakit')->onDelete('cascade);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
