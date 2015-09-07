<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contact_details', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->string('address_line_1',100);
          $table->string('address_line_2',100);
          $table->string('landmark',100);
          $table->string('city',100);
          $table->string('state',100);
          $table->string('country',100);
          $table->string('contact_number',12);
          $table->string('pin_code',6);
          $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop("contact_details");
    }
}
