<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblEmployeeLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_employee_leaves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_user_id')->unsigned();
            $table->integer('leave_type')->unsigned();
            $table->date('from_date')->nullable(false);
            $table->date('to_date')->nullable(false);
            $table->string('reason',500)->nullable(false);
            $table->enum('app_disapp_status', ['0', '1'])->comment('0=>No Action,1=>Approved');
           
            
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
        Schema::dropIfExists('tbl_employee_leaves');
    }
}
