<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiPengaturan5 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_pengaturan', function($table)
        {
            $table->dropColumn('kategori_id');
            $table->dropColumn('indikator_id');
            $table->dropColumn('komoditas_id');
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_pengaturan', function($table)
        {
            $table->smallInteger('kategori_id');
            $table->smallInteger('indikator_id');
            $table->smallInteger('komoditas_id');
        });
    }
}
