<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobsapplication', function (Blueprint $table) {
            $table->id();
            $table->string('tcidnumber');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('married');
            $table->string('license');
            $table->string('email');
            $table->string('phone');
            $table->string('message');
            $table->string('file');
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
        Schema::dropIfExists('jobsapplication');
    }
};
