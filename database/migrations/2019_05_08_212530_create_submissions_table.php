<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
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

        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->char('estado',10);
            $table->unsignedInteger('id_user');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
}
