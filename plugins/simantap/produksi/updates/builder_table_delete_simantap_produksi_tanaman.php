<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSimantapProduksiTanaman extends Migration
{
    public function up()
    {
        Schema::dropIfExists('simantap_produksi_tanaman');
    }
    
    public function down()
    {
        Schema::create('simantap_produksi_tanaman', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->date('tanggal');
            $table->string('kecamatan_id', 7);
            $table->string('kampung_id', 10);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->decimal('nilai', 10, 2);
            $table->integer('kategori_id')->unsigned();
        });
    }
}
