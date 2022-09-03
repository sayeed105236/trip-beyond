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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->bigInteger('manager')->unsigned();
            $table->foreign('manager')->references('id')->on('users');
            $table->bigInteger('type')->unsigned();
            $table->foreign('type')->references('id')->on('company_types');
            $table->string('name');
            $table->string('address_l1');
            $table->string('address_l2')->nullable();
            $table->string('city');
            $table->string('zip');
            $table->string('country');
            $table->string('email')->unique();
            $table->string('phone_code');
            $table->string('phone')->unique();
            $table->string('preferred_currency');
            $table->string('status');
            $table->boolean('does_agree');
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
        Schema::dropIfExists('companies');
    }
};
