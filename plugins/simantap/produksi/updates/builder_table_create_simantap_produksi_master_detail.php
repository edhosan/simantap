<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimantapProduksiMasterDetail extends Migration
{
    public function up()
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
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simantap_produksi_master_detail');
    }
}
