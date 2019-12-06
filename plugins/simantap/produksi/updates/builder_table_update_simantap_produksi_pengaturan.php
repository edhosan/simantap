<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiPengaturan extends Migration
{
    public function up()
    {
        Schema::rename('simantap_produksi_kategori', 'simantap_produksi_pengaturan');
    }
    
    public function down()
    {
        Schema::rename('simantap_produksi_pengaturan', 'simantap_produksi_kategori');
    }
}
