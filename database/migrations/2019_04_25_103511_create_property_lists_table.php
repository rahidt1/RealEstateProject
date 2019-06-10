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
            $table->string('location')->nullable();
            $table->integer('price')->nullable();
            $table->string('view')->nullable();
            $table->text('image');
            $table->string('thumbnail')->nullable();
            $table->integer('area')->nullable();
            $table->integer('bed')->nullable();
            $table->integer('bath')->nullable();
            $table->integer('patio')->nullable();
            $table->integer('garage')->nullable();
            $table->longText('description')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('owner')->nullable();
            $table->string('agentname')->nullable();
            $table->string('agentrole')->nullable();
            $table->string('agentphone')->nullable();
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
