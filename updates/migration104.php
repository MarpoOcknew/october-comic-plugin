<?php namespace Marpo\Comic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration104 extends Migration
{
    public function up()
    {
        Schema::table('marpo_comic_chapters', function($table) 
        {
            $table->boolean('published')->nullable()->after('desc');
            $table->timestamp('published_at')->nullable()->after('published');
       });

        Schema::table('marpo_comic_pages', function($table) 
        {
            $table->boolean('published')->nullable()->after('page');
            $table->timestamp('published_at')->nullable()->after('published');
        });
    }
    
    public function down()
    {
        Schema::table('marpo_comic_chapters', function($table)
        {
            $table->dropColumn('published');
            $table->dropColumn('published_at');
        });

        Schema::table('marpo_comic_pages', function($table)
        {
            $table->dropColumn('published');
            $table->dropColumn('published_at');
        });
    }
}