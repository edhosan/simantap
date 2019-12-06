<?php namespace SIMANTAP\Datareferensi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimantapDatareferensiBulan extends Migration
{
    public function up()
    {
        Schema::create('simantap_datareferensi_bulan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->smallInteger('id')->unsigned();
            $table->string('bulan', 20);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simantap_datareferensi_bulan');
    }
}
