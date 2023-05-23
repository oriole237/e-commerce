<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->string('username')->unique();
                $table->string('address')->nullable();
                $table->integer('phone');
                $table->string('status');
                $table->unsignedBigInteger('country_id')->nullable();
                $table->foreign('country_id')->references('id')->on('countries');
                $table->string('gender')->nullable();
                $table->date('birth')->nullable();
                $table->text('description')->nullable();
                $table->string('website')->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });
        }else{
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->string('username')->unique();
                $table->string('address')->nullable();
                if(!Schema::hasColumn("phone") && !Schema::hasColumn("status") && !Schema::hasColumn("country_id")){
                    $table->integer('phone');
                    $table->string('status');
                    $table->unsignedBigInteger('country_id')->nullable();
                    $table->foreign('country_id')->references('id')->on('countries');
                }
                $table->string('gender')->nullable();
                $table->date('birth')->nullable();
                $table->text('description')->nullable();
                $table->string('website')->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
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
        Schema::dropIfExists('users');
        // $table->dropForeign('country_id');
    }
}
