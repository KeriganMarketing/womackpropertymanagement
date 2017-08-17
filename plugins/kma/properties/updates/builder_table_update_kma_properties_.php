<?php namespace Kma\Properties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKmaProperties extends Migration
{
    public function up()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->text('description');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('kma_properties_', function($table)
        {
            $table->dropColumn('description');
            $table->increments('id')->unsigned()->change();
        });
    }
}
