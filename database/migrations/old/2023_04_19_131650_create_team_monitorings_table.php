<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_monitorings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_member_id');
            $table->string('working_progress')->nullable();
            $table->string('achivment')->nullable();
            $table->string('responsibilities')->nullable();
            $table->string('point')->nullable()->comment('oute of 5');
            $table->integer('monitoring_by')->comment(' monitoring Auth ID');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('team_member_id')->references('id')->on('team_members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_monitorings');
    }
}
