<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillGeneratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_generates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->bigInteger('bill_number');
            $table->integer('package_id')->nullable();
            $table->string('month_name');
            $table->string('year');
            $table->decimal('bill_amount',10,2);
            $table->integer('created_by')->comment('Bill Generate Auth ID');
            $table->enum('status',['pending','paid','unpaid'])->default('pending');
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
        Schema::dropIfExists('bill_generates');
    }
}
