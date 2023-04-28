<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateBandwidthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_bandwidths', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->integer('package_id');
            $table->enum('status',['pending','active','inactive','reject'])->default('active');
            $table->integer('created_by')->comment('Bandwidth Created Auth ID');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customer_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_bandwidths');
    }
}
