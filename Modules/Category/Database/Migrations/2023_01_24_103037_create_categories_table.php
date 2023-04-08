<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name',50)->nullable();
            $table->string('category_code',50)->nullable();
            $table->string('parent_category',50)->nullable();
            $table->string('description',50)->nullable();
            $table->string('category_image',250)->nullable();
            $table->string('category_banner_image',250)->nullable();
            $table->string('status',20)->nullable()->default('Active');
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
        Schema::dropIfExists('categories');
    }
}
