<?php namespace SIMANTAP\Datareferensi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapDatareferensiKomoditas extends Migration
{
    public function up()
    {
        Schema::table('simantap_datareferensi_komoditas', function($table)
        {
            $table->integer('kategori_id');
        });
    }
    
    public function down()
    {
        Schema::table('simantap_datareferensi_komoditas', function($table)
        {
            $table->dropColumn('kategori_id');
        });
    }
}
