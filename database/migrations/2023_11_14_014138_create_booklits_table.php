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
        Schema::create('booklits', function (Blueprint $table) {
            $table->id()->autoIncerment();
            $table->integer('no_rak_buku');
            $table->string('nama_buku',100);
            $table->string('nama_pencipta',100);
            $table->date('tanggal_rilis');
            $table->integer('jumlah_buku');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booklits');
    }
};
