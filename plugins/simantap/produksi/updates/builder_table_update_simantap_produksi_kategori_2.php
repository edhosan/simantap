<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiKategori2 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_kategori', function($table)
        {
            $table->integer('indikator_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_kategori', function($table)
        {
            $table->dropColumn('indikator_id');
        });
    }
}
