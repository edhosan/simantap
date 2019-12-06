<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiKampung2 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_kampung', function($table)
        {
            $table->dropColumn('bulan_id');
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_kampung', function($table)
        {
            $table->integer('bulan_id')->unsigned();
        });
    }
}
