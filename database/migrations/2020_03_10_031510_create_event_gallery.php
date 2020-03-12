<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_galleries', function (Blueprint $table) {
            $table->id();
            $table->longText("title");
            $table->longText("description");
            $table->timestamps();
        });

        Schema::create('event_gallery_images', function (Blueprint $table) {
            $table->id();
            $table->integer("egi_id");
            $table->longText("img_url");
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
        Schema::dropIfExists('event_galleries');
        Schema::dropIfExists('event_gallery_images');
    }
}
