<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_slug');
            $table->decimal('price', 10, 2);
            $table->boolean('featured')->default(false);
            $table->enum('purpose', ['sale', 'rent', 'pg']);
            $table->bigInteger('category');
            $table->string('image')->nullable();
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->bigInteger('city');
            $table->string('address');
            $table->integer('area')->nullable();
            $table->text('description')->nullable();
            $table->text('video')->nullable();
            $table->string('floorplan')->nullable();
            $table->text('map')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
