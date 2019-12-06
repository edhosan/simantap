<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiTanaman extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_tanaman', function($table)
        {
            $table->decimal('nilai', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_tanaman', function($table)
        {
            $table->dropColumn('nilai');
        });
    }
}
