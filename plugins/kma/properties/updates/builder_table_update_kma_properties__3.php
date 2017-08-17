<?php namespace Kma\Properties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKmaProperties3 extends Migration
{
    public function up()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->string('image', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->string('image', 255)->nullable(false)->change();
        });
    }
}
