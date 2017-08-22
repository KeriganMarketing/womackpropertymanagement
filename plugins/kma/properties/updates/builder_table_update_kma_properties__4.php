<?php namespace Kma\Properties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKmaProperties4 extends Migration
{
    public function up()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->text('description')->nullable(false)->change();
        });
    }
}
