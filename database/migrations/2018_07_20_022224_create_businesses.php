<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150)->nullable();
            $table->string('url', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('city', 200)->nullable();
            $table->string('state', 2)->nullable();
            $table->string('zipcode', 20)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('businesses_categories', function (Blueprint $table) {
            $table->unsignedInteger('business_id');
            $table->unsignedInteger('category_id');

            $table->engine = 'InnoDB';

            $table->index(['business_id', 'category_id']);
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('category_id')->references('id')->on('categories');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('businesses_categories');
        Schema::drop('businesses');
        Schema::drop('categories');
    }
}
