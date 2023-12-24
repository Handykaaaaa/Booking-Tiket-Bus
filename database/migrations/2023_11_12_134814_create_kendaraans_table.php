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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id(); 
            $table->string('Nama');
            $table->string('No_Kendaraan');
            $table->string('No_Kursi')->unique();
            $table->enum('Tujuan',['Jakarta', 'Bandung', 'Lintas Sumatra', 'Surabaya', 'Bali']);
            $table->enum('Jenis_Kendaraan',['Bus class VIP', 'Bus eksekutif', 'Bus high class VVIP', 'Bus ekonomi AC']);
            $table->string('Harga_satuan');
           
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
        Schema::dropIfExists('kendaraans');
    }
};
