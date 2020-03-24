<?php

/**
 * Laravel Schematics
 *
 * WARNING: removing @tag value will disable automated removal
 *
 * @package Laravel-schematics
 * @url     https://github.com/mtolhuys/laravel-schematics
 * @author  Maarten Tolhuijs <mtolhuys@protonmail.com>
 * @tag     laravel-schematics-posts-relation
 * @tag     laravel-schematics-categories-relation
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsCategoriesRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', static function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', static function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });
    }
}
