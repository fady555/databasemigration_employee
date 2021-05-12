<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('full_name_en');
            $table->string('full_name_ar')->nullable()->default('NULL');
            $table->string('full_name_fa')->nullable()->default('NULL');
            $table->tinyInteger('age');
            $table->string('avatare')->nullable()->default('NULL');

            $table->bigInteger('jop_id')->unsigned();
            $table->foreign('jop_id')->references('id')->on('jops')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade')->onDelete('cascade');


            $table->date('date_of_work');
            $table->double('salary');
            $table->bigInteger('personal_identity_id');
            $table->integer('number_of_work_prmit_active');
            $table->integer('number_of_work_prmit_token');

            $table->bigInteger('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('more_info_id')->unsigned();
            $table->foreign('more_info_id')->references('id')->on('more_infos')->onUpdate('cascade')->onDelete('cascade');

            $table->string('email')->nullable()->default('NULL');
            $table->bigInteger('phone');
            $table->longText('contract');

            $table->string('name_bank')->nullable();
            $table->string('account_number_bank')->nullable();

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
        Schema::dropIfExists('employees');
    }
}
