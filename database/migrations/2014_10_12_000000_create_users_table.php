<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('first_name', 60)->nullable(false);
            $table->string('last_name', 60)->nullable(false);
            $table->string('mob_no', 10)->nullable(false);
            $table->enum('roll_type', ['0', '1','2'])->comment('0=>Admin,1=>Employee,2=>client');
            $table->char('gender',1)->nullable(false);
            $table->date('joining_date')->nullable();
            $table->string('employee_id',50)->nullable();
            $table->string('emp_department_type', 11)->nullable();
            $table->string('emp_image', 60)->nullable(false);
            $table->string('emp_facebook_link', 60)->nullable();
            $table->string('emp_twitter_link', 60)->nullable();
            $table->string('emp_linkedin_link', 60)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
