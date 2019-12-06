<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiKampung3 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_kampung', function($table)
        {
            $table->dropColumn('nilai');
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_kampung', function($table)
        {
            $table->decimal('nilai', 10, 0);
        });
    }
}
