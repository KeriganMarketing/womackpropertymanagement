<?php namespace Kma\Properties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKmaProperties extends Migration
{
    public function up()
    {
        Schema::create('kma_properties_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('address');
            $table->integer('sqft')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kma_properties_');
    }
}
