<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dept_name',60)->nullable(false);
            $table->string('dept_head',60)->nullable(false);
            $table->string('dept_employee',10)->nullable(false);
          
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
        Schema::dropIfExists('tbl_departments');
    }
}
