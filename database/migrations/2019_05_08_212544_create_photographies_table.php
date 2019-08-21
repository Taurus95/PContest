<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //put on foreing keys
        Schema::enableForeignKeyConstraints();
        Schema::defaultStringLength(191);

        Schema::create('photographies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('name', 50);
            $table->mediumText('description');
            $table->string('cameraDescription')->nullable();
            $table->string('lensDescription')->nullable();
            $table->integer('ISO')->nullable();
            $table->integer('obsVelocity')->nullable();
            $table->string('opening')->nullable();
            $table->unsignedInteger('id_submission');
            $table->unsignedInteger('id_category');
            $table->foreign('id_submission')->references('id')->on('submissions');
            $table->foreign('id_category')->references('id')->on('categories');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photographies');
    }
}
