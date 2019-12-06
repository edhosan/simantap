<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiKategori extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_kategori', function($table)
        {
            $table->string('keterangan', 250);
            $table->string('satuan', 100);
            $table->dropColumn('indikator_id');
            $table->dropColumn('komoditas_id');
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_kategori', function($table)
        {
            $table->dropColumn('keterangan');
            $table->dropColumn('satuan');
            $table->integer('indikator_id')->unsigned();
            $table->integer('komoditas_id')->unsigned();
        });
    }
}
