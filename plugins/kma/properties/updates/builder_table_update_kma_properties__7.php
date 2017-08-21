<?php namespace Kma\Properties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKmaProperties7 extends Migration
{
    public function up()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->boolean('featured')->default(0);
            $table->boolean('currently_managed')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->dropColumn('featured');
            $table->dropColumn('currently_managed');
        });
    }
}
