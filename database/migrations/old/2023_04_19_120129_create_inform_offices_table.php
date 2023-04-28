<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inform_offices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('complain_id');
            $table->unsignedBigInteger('managed_id');
            $table->text('inform_details');
            $table->enum('inform_status',['pending','review','accept','reject']);
            $table->integer('posted_by')->comment('Post  Generate Auth ID');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('managed_id')->references('id')->on('manage_complains')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inform_offices');
    }
}
