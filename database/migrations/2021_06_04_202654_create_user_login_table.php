<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('user_login', function (Blueprint $table) {

            $table->id();
            $table->string('nombre',250);
            $table->string('email',250);
            $table->string('password',100);
            $table->string('direccion',300);
            $table->string('celular',20);
            $table->string('edad',3);
            $table->unsignedBigInteger('type_users_id');
            $table->foreing('type_users_id')->references('id')->on('type_users');
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
        Schema::dropIfExists('user_login');
    }
}
