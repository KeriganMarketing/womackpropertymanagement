<?php namespace Kma\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKmaTestimonials2 extends Migration
{
    public function up()
    {
        Schema::table('kma_testimonials_', function($table)
        {
            $table->boolean('featured')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('kma_testimonials_', function($table)
        {
            $table->dropColumn('featured');
        });
    }
}
