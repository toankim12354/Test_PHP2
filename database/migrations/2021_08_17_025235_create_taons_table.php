<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taons', function (Blueprint $table) {
            $table->id();
            $table->String('name', 255);
            $table->String('fullname', 255);
            $table->string('image', 255)->nullable();
            $table->string('email', 255);
            $table->string('phone_number', 11);
            $table->String('address', 255);
            $table->string('password', 255);
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->timestamps();
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
        Schema::dropIfExists('taons');
    }
}
