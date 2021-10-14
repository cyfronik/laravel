<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_has_users', function (Blueprint $table) {

              $table->id();
              $table->unsignedBigInteger('user_id');
              $table->unsignedBigInteger('role_id');
              $table->timestamps();
          });

          Schema::table('roles_has_users', function (Blueprint $table) {
               $table->foreign('user_id')->references('id')->on('users');
          });

          Schema::table('roles_has_users', function (Blueprint $table) {
               $table->foreign('role_id')->references('id')->on('roles');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_has_users');
    }
}
