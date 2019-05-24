<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Address');
            $table->string('CNIC');
            $table->string('Mobile');
            $table->string('Email');
            $table->string('Subject');
            $table->string('AreaName');
            $table->string('Complain');
            $table->string('Suggestion');
            $table->string('Upload');
            $table->string('Status');
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
        Schema::drop('complaints');
    }
}
