<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

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
            $table->string('nic_name');
            $table->longText('description_en')->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('description_fr')->nullable();
            $table->timestamps();

        });


        DB::table('jops')->insert([
            ['name_en'=>"Human Resource",'name_ar'=>"الموارد البشريه","name_fr"=>'Ressource Humaine','nic_name'=>"HR"],
            ['name_en'=>"law affires",'name_ar'=>"شئون قانونيه","name_fr"=>'ِِAffaires Juridiques','nic_name'=>"law"],
        ]);
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
