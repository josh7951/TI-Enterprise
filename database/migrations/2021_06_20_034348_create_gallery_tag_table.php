<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_tag', function (Blueprint $table) {
            $table->unsignedInteger('gallery_id');
            $table->unsignedInteger('tag_id');
            // Makes it so that galleries can only be associated once per tag
            $table->unique(['gallery_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_tag');
    }
}
