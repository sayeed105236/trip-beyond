<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('title')->unsigned()->nullable();
            $table->foreign('title')->references('id')->on('name_titles');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('photo')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('password');
            $table->tinyInteger('type')->default(0);
            /* Users: 0=>User, 1=>Super Admin, 2=>Manager */
            $table->tinyInteger('status')->default(0);
            /*Active: 0, Inactive: 1*/
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
