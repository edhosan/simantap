<?php namespace SIMANTAP\Datareferensi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimantapDatareferensiKecamatan extends Migration
{
    public function up()
    {
        Schema::create('simantap_datareferensi_kecamatan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('id', 7);
            $table->string('kabupaten_id', 4);
            $table->string('name', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simantap_datareferensi_kecamatan');
    }
}
