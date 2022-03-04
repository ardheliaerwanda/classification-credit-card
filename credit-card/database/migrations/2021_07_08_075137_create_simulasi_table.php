<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('CODE_GENDER',['0','1']);
            $table->Integer('FLAG_OW0_CAR');
            $table->Integer('FLAG_OW0_REALT1');
            $table->Integer('CNT_CHILDREN');
            $table->String('AMT_INCOME_TOTAL');
            $table->Integer('NAME_EDUCATION_TYPE');
            $table->Integer('NAME_FAMILY_STATUS');
            $table->Integer('NAME_HOUSING_TYPE');
            $table->String('DAYS_BIRTH');
            $table->String('DAYS_EMPLOYED');
            $table->Integer('JOB');
            $table->Integer('TARGET');
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
        Schema::dropIfExists('simulasi');
    }
}
