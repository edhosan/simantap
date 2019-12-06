<?php namespace SIMANTAP\Datareferensi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapDatareferensiKabupaten extends Migration
{
    public function up()
    {
        Schema::table('simantap_datareferensi_kabupaten', function($table)
        {
            $table->dropPrimary(['id']);
            $table->primary(['id','provinsi_id']);
        });
    }
    
    public function down()
    {
        Schema::table('simantap_datareferensi_kabupaten', function($table)
        {
            $table->dropPrimary(['id','provinsi_id']);
            $table->primary(['id']);
        });
    }
}
