<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommandsArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('commands_articles')){
            Schema::create('commands_articles', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('command_id');
                $table->foreign('command_id')->references('id')->on('commands');
                $table->unsignedBigInteger('article_id');
                $table->foreign('article_id')->references('id')->on('articles');
                $table->integer('quantity');
                $table->float('amount');
                $table->timestamps();
                $table->softDeletes();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        
        Schema::table('commands_articles', function(Blueprint $table){
            if (Schema::hasColumn('commands_articles', 'command_id', 'article_id')) {
                // $table->dropForeign(['commands_articles_command_id_foreign']);
                // $table->dropForeign(['commands_articles_article_id_foreign']);
                // $table->dropColumn('command_id');
                // $table->dropColumn('article_id');
            }
           
        });

        Schema::dropIfExists('commands_articles');
    }
}
