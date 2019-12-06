<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiMaster extends Migration
{
    public function up()
    {
        Schema::rename('simantap_produksi_pengaturan', 'simantap_produksi_master');
    }
    
    public function down()
    {
        Schema::rename('simantap_produksi_master', 'simantap_produksi_pengaturan');
    }
}
