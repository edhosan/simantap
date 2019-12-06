<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiTanaman3 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_tanaman', function($table)
        {
            $table->integer('kategori_id')->unsigned();
            $table->dropColumn('komoditas_id');
            $table->dropColumn('indikator_id');
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_tanaman', function($table)
        {
            $table->dropColumn('kategori_id');
            $table->integer('komoditas_id')->unsigned();
            $table->integer('indikator_id')->unsigned();
        });
    }
}
