<?php namespace Marpo\Comic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarpoComicPages extends Migration
{
    public function up()
    {
        Schema::create('marpo_comic_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('chapter_id');
            $table->integer('page_number');
            $table->text('transcript')->nullable();
            $table->string('sketch', 255);
            $table->string('textless', 255);
            $table->string('page', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marpo_comic_pages');
    }
}