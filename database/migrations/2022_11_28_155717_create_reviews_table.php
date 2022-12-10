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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('body',200);
            $table->foreignId('user_id')
                  ->nullable();
            $table->foreignId('type_id')->nullable();
            $table->string('name',50);
            $table->integer('abv');
            $table->integer('price');
            $table->string('image_path')->nullable();
            $table->timestamp('updated_at',$precision = 0)->nullable();
            $table->timestamp('created_at',$precision = 0)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
