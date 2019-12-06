<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimantapProduksiKategori extends Migration
{
    public function up()
    {
        Schema::create('simantap_produksi_kategori', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('indikator_id')->unsigned();
            $table->integer('komoditas_id')->unsigned();
            $table->smallInteger('tahun')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simantap_produksi_kategori');
    }
}
