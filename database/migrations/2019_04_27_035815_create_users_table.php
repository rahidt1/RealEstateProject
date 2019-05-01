<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('phone');
            $table->string('address');
            $table->date('date_of_birth');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('company')->nullable();
            $table->string('role')->nullable()->default('User');
            $table->string('login_token')->nullable();
            $table->tinyInteger('is_logged_in')->default('0');
            $table->tinyInteger('is_active')->default('1');
            $table->rememberToken();
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
