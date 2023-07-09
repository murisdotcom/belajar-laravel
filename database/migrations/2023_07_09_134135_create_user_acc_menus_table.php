<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_acc_menus', function (Blueprint $table) {
            $table->string('username', 50);
            $table->string('form_id', 10);
            $table->integer('allow_create');
            $table->integer('allow_update');
            $table->integer('allow_delete');
            $table->integer('allow_print');
            $table->integer('allow_conf');
            $table->integer('allow_open');
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
        Schema::dropIfExists('user_acc_menus');
    }
}
