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
        Schema::create('detail_kasirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('kasir_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->integer('subtotal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kasirs');
    }
};
