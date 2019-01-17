<?php namespace Marpo\Comic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarpoComicChapters extends Migration
{
    public function up()
    {
        Schema::create('marpo_comic_chapters', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('number');
            $table->string('banner', 255);
            $table->string('desc', 1024);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marpo_comic_chapters');
    }
}
