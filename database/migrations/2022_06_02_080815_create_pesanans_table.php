<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('desainer');
            $table->date('tanggal_pesan');
            $table->integer('satuan');
            $table->integer('total_bayar');
            $table->string('status');
            $table->string('tracking')->nullable();
            $table->string('bukti_bayar')->nullable();
            $table->unsignedBigInteger('jenis_id');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('pesanans');
    }
}
