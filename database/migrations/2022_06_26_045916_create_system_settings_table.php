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
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_title');
            $table->string('slogan');
            $table->longText('google_analytics')->nullable();
            $table->longText('facebook_pixel')->nullable();
            $table->longText('google_map')->nullable();
            $table->text('meta_author')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('footer_copyright')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('youtube_url')->nulalble();
            $table->text('instagram_url')->nullable();
            $table->string('mobile')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('frontend_logo')->nullable();
            $table->string('backend_logo')->nullable();
            $table->string('alt_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('banner')->nullable();
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
        Schema::dropIfExists('system_settings');
    }
};
