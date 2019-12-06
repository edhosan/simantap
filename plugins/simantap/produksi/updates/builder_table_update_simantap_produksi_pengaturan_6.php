<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiPengaturan6 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_pengaturan', function($table)
        {
            $table->smallInteger('kategori_id');
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_pengaturan', function($table)
        {
            $table->dropColumn('kategori_id');
        });
    }
}
