<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiTanaman2 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_tanaman', function($table)
        {
            $table->decimal('nilai', 10, 2)->change();
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_tanaman', function($table)
        {
            $table->decimal('nilai', 10, 0)->change();
        });
    }
}
