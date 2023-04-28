<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('bill_id');
            $table->decimal('bill_amount',10,2);
            $table->decimal('discount_amount',10,2);
            $table->decimal('pay_amount',10,2);
            $table->enum('pay_system',['online_payment']);
            $table->enum('pay_method',['bkash','nagad','upay','bank','bank_card']);
            $table->enum('status',['pending','paid','unpaid'])->default('pending');
            $table->string('transaction_id');
            $table->integer('payment_by')->comment(' customer Auth ID');
            $table->softDeletes();
            $table->foreign('bill_id')->references('id')->on('bill_generates')->onDelete('cascade');
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
        Schema::dropIfExists('bill_payments');
    }
}
