<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('site_email');
            $table->string('logo');
            $table->string('facebook_link')->default('www.facebook.com');
            $table->string('instagram_link')->default('www.instagram.com');
            $table->string('twitter_link')->default('www.twitter.com');
            $table->string('youtube_link')->default('www.youtube.com');
            $table->string('address');
            $table->string('phone');
            $table->string('fax');
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
        Schema::dropIfExists('settings');
    }
}
