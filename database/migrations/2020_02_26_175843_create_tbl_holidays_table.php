<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_holidays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day_name',60)->nullable(false);
            $table->date('holiday_date')->nullable(false);
            $table->string('holiday_name',100)->nullable(false);
          
            $table->timestamps();
            $table->softDeletes();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_holidays');
    }
}
