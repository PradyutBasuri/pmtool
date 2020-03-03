<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location',255)->nullable(false);
            $table->string('address',255)->nullable(false);
            $table->string('client_name',255)->nullable(false);
            $table->string('client_email',255)->unique()->nullable(false);
            $table->string('client_ph',10)->unique()->nullable(false);
            $table->string('image',255)->nullable(false);
            $table->string('twitter_link',255)->nullable();
            $table->string('linkedin_link',255)->nullable();
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
        Schema::dropIfExists('tbl_clients');
    }
}
