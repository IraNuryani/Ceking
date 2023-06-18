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
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->date('tanggal_lahir')->nullable();
            $table->float('berat_badan_saat_lahir');
            $table->float('tinggi_badan_saat_lahir');
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
        Schema::dropIfExists('anaks');
    }
};
