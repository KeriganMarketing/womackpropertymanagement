<?php namespace Kma\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKmaTestimonials extends Migration
{
    public function up()
    {
        Schema::table('kma_testimonials_', function($table)
        {
            $table->string('author_title')->nullable();
            $table->string('author_company')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kma_testimonials_', function($table)
        {
            $table->dropColumn('author_title');
            $table->dropColumn('author_company');
        });
    }
}
