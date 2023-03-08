<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_suppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("supplier_id");
            $table->unsignedBigInteger("category_id");
            $table->longText("lead_time")->nullable();
            $table->string("default_mark_up")->nullable();
            $table->longText("mark_up_by_quantity")->nullable();
            $table->longText("selected_branding")->nullable();
            $table->longText("website_branding")->nullable();
            $table->longText("supplier_price_break")->nullable();
            $table->string("min_qty")->nullable();
            $table->longText("web_qty")->nullable();
            $table->longText("brand")->nullable();
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
        Schema::dropIfExists('category_suppliers');
    }
}
