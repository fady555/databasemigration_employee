<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->longText('experience_en')->default('zero');
            $table->longText('experience_ar')->default('zero');
            $table->longText('experience_fa')->default('zero');
            $table->bigInteger('degree_id')->unsigned();
            $table->foreign('degree_id')->references('id')->on('degrees')->onUpdate('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('statuses');
    }
}
