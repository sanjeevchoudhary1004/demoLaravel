<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tbls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',60);
            $table->string('email',60);
            $table->string('password',20);
            $table->string('degree');
            $table->string('gender');
             $table->string('image');
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
        Schema::dropIfExists('users_tbls');
    }
}
