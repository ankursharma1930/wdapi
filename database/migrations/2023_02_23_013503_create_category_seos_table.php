<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_seos', function (Blueprint $table) {
            $table->id();
            $table->string("category_id")->unique();
            $table->string("alternat_name1")->nullable();
            $table->string("alternat_name2")->nullable();
            $table->string("alternat_name3")->nullable();
            $table->string("alternat_name4")->nullable();
            $table->string("mark_name1")->nullable();
            $table->string("mark_name2")->nullable();
            $table->string("mark_name3")->nullable();
            $table->string("mark_name4")->nullable();
            $table->string("product_keyword1")->nullable();
            $table->string("product_keyword2")->nullable();
            $table->string("product_keyword3")->nullable();
            $table->string("product_keyword4")->nullable();
            $table->string("mark_keyword1")->nullable();
            $table->string("mark_keyword2")->nullable();
            $table->string("mark_keyword3")->nullable();
            $table->string("mark_keyword4")->nullable();
            $table->string("mark_all")->nullable();
            $table->tinyText("keyword")->nullable();
            $table->string("mark_meta_key")->nullable();
            $table->string("title")->nullable();
            $table->string("mark_title")->nullable();
            $table->tinyText("meta_description")->nullable();
            $table->string("mark_meta_desc")->nullable();
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
        Schema::dropIfExists('category_seos');
    }
}
