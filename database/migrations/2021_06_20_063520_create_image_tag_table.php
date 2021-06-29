<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_tag', function (Blueprint $table) {
            $table->unsignedInteger('image_id');
            $table->unsignedInteger('tag_id');
            // Makes it so that images can only be associated once per tag
            $table->unique(['image_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_tag');
    }
}
