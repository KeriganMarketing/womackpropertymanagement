<?php namespace Kma\Properties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKmaProperties2 extends Migration
{
    public function up()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->string('image', 255);
        });
    }
    
    public function down()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
