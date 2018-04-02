<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientRanking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('client_rank', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name');
            $table->text('contact');
            $table->text('email');
            $table->text('rank');
            $table->text('annual_fees');
            $table->text('backward_fees');
            $table->text('forward_fees');
            $table->text('accounts_prep');
            $table->text('audit');
            $table->text('tax_returns');
            $table->text('other_backward_looking');
            $table->text('business_advisory');
            $table->text('personal_wealth_planning');
            $table->text('tax_planning');
            $table->text('other_forward_looking');
            $table->text('client_gross_sales');
            $table->text('number_employees');
            $table->text('business_activity');
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
        Schema::dropIfExists('client_rank');
    }
}
