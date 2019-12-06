<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiKecamatan extends Migration
{
    public function up()
    {
        Schema::rename('simantap_produksi_master_kecamatan', 'simantap_produksi_kecamatan');    Schema::table('simantap_produksi_kecamatan', function($table)
        {
            $table->primary(['master_id','kecamatan_id']);
        });
    }
    
    public function down()
    {
        Schema::rename('simantap_produksi_kecamatan', 'simantap_produksi_master_kecamatan');
        Schema::table('simantap_produksi_master_kecamatan', function($table)
        {
            $table->dropPrimary(['master_id','kecamatan_id']);
        });
    }
}
