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
        Schema::create('dealerrequest', function (Blueprint $table) {
            $table->id();
            $table->string('dealername');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('gsm');
            $table->string('faks');
            $table->string('taxadministration');
            $table->string('taxnumber');
            $table->string('website');
            $table->string('shippingaddress');
            $table->string('addresspayment');
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
        Schema::dropIfExists('dealerrequest');
    }
};
