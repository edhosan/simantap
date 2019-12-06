<?php namespace SIMANTAP\Datareferensi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapDatareferensiIndikator extends Migration
{
    public function up()
    {
        Schema::table('simantap_datareferensi_indikator', function($table)
        {
            $table->string('satuan', 50);
        });
    }
    
    public function down()
    {
        Schema::table('simantap_datareferensi_indikator', function($table)
        {
            $table->dropColumn('satuan');
        });
    }
}
