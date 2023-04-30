<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->date('complaint_date');
            $table->text('complaint_description');
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->date('resolved_date')->nullable();
            $table->text('resolution_description')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('assigned_to')->references('id')->on('support_teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
