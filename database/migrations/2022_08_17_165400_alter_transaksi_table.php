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
        //
        Schema::table('transaksis', function(Blueprint $table){
            $table->string('nama_produk');
            $table->string('ukuran');
            $table->string('merk');
            $table->string('motif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('transaksis', function(Blueprint $table) {
            $table->dropColumn('nama_produk');
            $table->dropColumn('ukuran');
            $table->dropColumn('merk');
            $table->dropColumn('motif');
        });
    }
};
