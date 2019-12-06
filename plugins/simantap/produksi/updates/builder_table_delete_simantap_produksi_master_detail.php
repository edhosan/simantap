<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSimantapProduksiMasterDetail extends Migration
{
    public function up()
    {
        Schema::dropIfExists('simantap_produksi_master_detail');
    }
    
    public function down()
    {
        Schema::create('simantap_produksi_master_detail', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('master_id')->unsigned();
            $table->string('kecamatan_id', 7);
            $table->string('kampung_id', 10);
            $table->decimal('nilai', 10, 0);
            $table->smallInteger('bulan_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
