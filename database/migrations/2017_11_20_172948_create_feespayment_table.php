<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeespaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feepayments', function (Blueprint $table) {
            $table->increments('feeID');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
            $table->date('date_received');
            $table->decimal('deposit_paid', 15,2);
            $table->string('mode_payment');
            $table->integer('discount')->asigned(0.00)->nullable();
            $table->integer('cheque')->length(10)->unsigned()->nullable();
            $table->string('sponsored');
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
        Schema::dropIfExists('feespayment');
    }
}
