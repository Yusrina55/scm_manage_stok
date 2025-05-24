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
        Schema::create('log_masuks', function (Blueprint $table) {
            $table->id();
            $table->integer('kuantitas_masuk');
            $table->integer('harga_supplier');
            $table->timestamp('tanggal_masuk')->useCurrent();
            $table->foreignId('produk_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_masuks');
    }
};
