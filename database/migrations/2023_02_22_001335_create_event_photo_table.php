<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_photos', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('event_id');
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_photo');
    }
}
