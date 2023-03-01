<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_filters', function (Blueprint $table) {
            $table->id();
            $table->string("category_id")->unique();
            $table->tinyText("type")->nullable();
            $table->tinyText("style")->nullable();
            $table->string("gender_fit1")->nullable();
            $table->string("gender_fit2")->nullable();
            $table->string("gender_fit3")->nullable();
            $table->string("gender_fit4")->nullable();
            $table->tinyText("material")->nullable();
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
        Schema::dropIfExists('category_filters');
    }
}
