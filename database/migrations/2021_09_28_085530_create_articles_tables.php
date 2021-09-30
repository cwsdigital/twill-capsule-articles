<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTables extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();

            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();

            $table->unsignedBigInteger('author_id')->nullable();

        });

        Schema::create('article_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'article');

            $table->string('title')->nullable();

            $table->string('heading')->nullable();
            $table->string('subheading')->nullable();

            $table->text('excerpt')->nullable();
        });

        Schema::create('article_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'article');
        });

        Schema::create('article_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'article');
        });
    }

    public function down()
    {
        Schema::dropIfExists('article_revisions');
        Schema::dropIfExists('article_translations');
        Schema::dropIfExists('article_slugs');
        Schema::dropIfExists('articles');
    }
}
