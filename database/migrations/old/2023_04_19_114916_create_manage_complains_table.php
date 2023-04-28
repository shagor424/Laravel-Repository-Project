<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_complains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('complain_id');
            $table->unsignedBigInteger('team_member_id');
            $table->text('remarks');
            $table->enum('status',['pending','complete','incomplete','assign_team_member']);
            $table->integer('managed_by')->comment('Managed Complain  Auth ID');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('complain_id')->references('id')->on('add_complains')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_complains');
    }
}
