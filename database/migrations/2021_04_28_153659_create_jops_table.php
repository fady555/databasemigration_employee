<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jops', function (Blueprint $table) {

            $table->id();
            $table->string('name_en')->nullable()->default('NULL');
            $table->string('name_ar')->nullable()->default('NULL');
            $table->string('name_fr')->nullable()->default('NULL');
            $table->string('nic_name')->collation('');
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
        Schema::dropIfExists('jops');
    }
}
