<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('propertyname');
            $table->string('location');
            $table->integer('price');
            $table->integer('area');
            $table->integer('bed');
            $table->integer('bath');
            $table->integer('patio');
            $table->integer('garage');
            $table->text('description');
            $table->string('address');
            $table->string('owner');
            $table->string('agentname');
            $table->string('agentrole');
            $table->string('agentphone');
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
        Schema::dropIfExists('property_lists');
    }
}
