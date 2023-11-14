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
        Schema::create('guardlits', function (Blueprint $table) {
            $table->id()->autoIncerment();;
            $table->integer('id_penjaga');
            $table->string('nama_penjaga',100);
            $table->string('shift');
            $table->integer('umur');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin',100);
            $table->string('alamat',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardlits');
    }
};
