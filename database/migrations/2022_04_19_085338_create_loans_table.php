<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->timestamp('birthdate');
            $table->string('place');
            $table->string('phone');
            $table->string('nat_id');
            $table->string('work_place');
            $table->string('monthly_income');
            $table->string('loan_type');
            $table->string('credit_card')->nullable();
            $table->string('credit_card_name')->nullable();
            $table->timestamp('credit_card_expire')->nullable();
            $table->string('credit_card_monthly_income')->nullable();

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
        Schema::dropIfExists('loans');
    }
}
