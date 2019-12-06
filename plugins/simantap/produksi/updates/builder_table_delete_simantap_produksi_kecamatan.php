<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSimantapProduksiKecamatan extends Migration
{
    public function up()
    {
        Schema::dropIfExists('simantap_produksi_kecamatan');
    }
    
    public function down()
    {
        Schema::create('simantap_produksi_kecamatan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('master_id');
            $table->string('kecamatan_id', 7);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['master_id','kecamatan_id']);
        });
    }
}
