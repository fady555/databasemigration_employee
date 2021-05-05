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


            /*$table->string('full_name_ar');
            $table->string('full_name_fa')->nullable()->default('NULL');
            $table->tinyInteger('age')->nullable()->default('NULL');
            $table->string('avatare')->nullable()->default('NULL');

            $table->bigInteger('jop_id')->unsigned()->nullable()->default('NULL');
            $table->integer('id_status_of_employe',11)->unsigned()->nullable()->default('NULL');
            $table->datetime('date_of_instert_employee')->nullable()->default('NULL');
            $table->timestamp('date_of_work')->default('current_timestamp');
            $table->smallInteger('salary',6)->nullable()->default('NULL');
            $table->bigInteger('personal_identity_id',20)->nullable()->default('NULL');
            ->nullable()->default('NULL');
            $table->integer('number_of_work_prmit_active',11)->nullable()->default('NULL');
            $table->integer('number_of_work_prmit_token',11)->nullable()->default('NULL');
            $table->integer('address_id',11)->unsigned()->nullable()->default('NULL');
            $table->integer('more_info_id',11)->unsigned()->nullable()->default('NULL');
            $table->string('email')->nullable()->default('NULL');
            $table->bigInteger('phone',20)->nullable()->default('NULL');
            ->nullable()->default('NULL');

            $table->timestamps();*/
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
