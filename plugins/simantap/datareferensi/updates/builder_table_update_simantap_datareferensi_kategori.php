<?php namespace SIMANTAP\Datareferensi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapDatareferensiKategori extends Migration
{
    public function up()
    {
        Schema::table('simantap_datareferensi_kategori', function($table)
        {
            $table->smallInteger('id')->nullable(false)->unsigned()->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('simantap_datareferensi_kategori', function($table)
        {
            $table->increments('id')->nullable(false)->unsigned()->default(null)->change();
        });
    }
}
