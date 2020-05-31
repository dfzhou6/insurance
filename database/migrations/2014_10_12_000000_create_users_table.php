<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('open_id')->unique()->nullable(false);
            $table->string('union_id')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('nick')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('is_super')->default(false);
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
        Schema::dropIfExists('users');
    }
}
