<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('articles')){
            Schema::create('articles', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('reference');
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->float('price');
                $table->integer('quantity');
                $table->string('principal_image');
                $table->string('image1')->nullable();
                $table->string('image2')->nullable();
                $table->string('image3')->nullable();
                $table->string('image4')->nullable();
                $table->float('promo_price')->nullable();
                $table->float('promo_percent')->nullable();
                $table->string('measure')->nullable();
                $table->integer('duration_promo')->nullable();
                $table->string('unity_date_duration')->nullable();
                $table->text('description');
                $table->boolean('status')->default(1);
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
        Schema::dropIfExists('articles');
        // $table->dropForeign('user_id');
    }
}
