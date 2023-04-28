<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_collections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('bill_id');
            $table->decimal('bill_amount',10,2);
            $table->decimal('discount_amount',10,2);
            $table->decimal('pay_amount',10,2);
            $table->enum('pay_system',['cash']);
            $table->enum('pay_method',['cash']);
            $table->enum('status',['pending','paid','unpaid'])->default('pending');
            $table->string('transaction_id');
            $table->integer('created_by')->comment('Bill collection Auth ID');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('bill_id')->references('id')->on('bill_generates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_collections');
    }
}
