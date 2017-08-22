<?php namespace Kma\Properties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKmaProperties6 extends Migration
{
    public function up()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->string('sqft', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->text('sqft')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
