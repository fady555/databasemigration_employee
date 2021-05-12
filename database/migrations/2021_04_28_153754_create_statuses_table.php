<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->longText('experience_fr')->default('zero');
            $table->bigInteger('degree_id')->unsigned();
            $table->foreign('degree_id')->references('id')->on('degrees')->onUpdate('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        DB::table('statuses')->insert([
            ['experience_en'=>"Commercial affairs ","experience_ar"=>"شئون تجاريه ",'experience_fr'=>"Les affaires commerciales",'degree_id'=>'1'],
            ['experience_en'=>"marketing","experience_ar"=>"تسويق",'experience_fr'=>"commercialisation",'degree_id'=>'2']
        ]);
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
