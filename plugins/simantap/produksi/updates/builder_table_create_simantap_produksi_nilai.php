<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSimantapProduksiNilai extends Migration
{
    public function up()
    {
        Schema::create('simantap_produksi_nilai', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('kampung_id');
            $table->integer('bulan_id');
            $table->decimal('nilai', 10, 0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('simantap_produksi_nilai');
    }
}
