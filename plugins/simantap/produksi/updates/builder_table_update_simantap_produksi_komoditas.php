<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiKomoditas extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_komoditas', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_komoditas', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
