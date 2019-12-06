<?php namespace SIMANTAP\Produksi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSimantapProduksiNilai2 extends Migration
{
    public function up()
    {
        Schema::table('simantap_produksi_nilai', function($table)
        {
            $table->decimal('nilai', 10, 2)->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('simantap_produksi_nilai', function($table)
        {
            $table->decimal('nilai', 10, 2)->default(null)->change();
        });
    }
}
