<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimantapProduksiKampung extends Migration
{
    public function up()
    {
        Schema::create('simantap_produksi_kampung', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('master_id')->unsigned();
            $table->integer('komoditas_id')->unsigned();
            $table->string('kecamatan_id', 7);
            $table->string('kampung_id', 10);
            $table->decimal('nilai', 10, 0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simantap_produksi_kampung');
    }
}
