<?php namespace Kma\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKmaTestimonials extends Migration
{
    public function up()
    {
        Schema::create('kma_testimonials_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('author')->nullable();
            $table->text('comment');
            $table->string('source')->nullable();
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kma_testimonials_');
    }
}
