<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiPengaturan4 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_pengaturan', function($table)
        {
            $table->smallInteger('indikator_id');
            $table->smallInteger('komoditas_id');
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_pengaturan', function($table)
        {
            $table->dropColumn('indikator_id');
            $table->dropColumn('komoditas_id');
        });
    }
}
