<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSimantapProduksiMaster extends Migration
{
    public function up()
    {
        Schema::dropIfExists('simantap_produksi_master');
    }
    
    public function down()
    {
        Schema::create('simantap_produksi_master', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->smallInteger('tahun')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('keterangan', 250);
            $table->string('satuan', 100);
            $table->smallInteger('kategori_id');
        });
    }
}
