<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barangdua_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->foreign('barangdua_id')->references('id')->on('Barangduas')->onDelete('cascade');
            $table->foreign('pembeli_id')->references('id')->on('Pembelis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Transaksis');
    }
};
