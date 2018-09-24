<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiveawaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaways', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('ends_at');
            $table->string('image');
            $table->string('title');
            $table->string('product_image');
            $table->string('product_image_2');
            $table->string('product_image_3');
            $table->string('product_image_4');
            $table->longText('description');
            $table->longText('features');
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
        Schema::dropIfExists('giveaways', function (Blueprint $table) {
            //
        });
    }
}
