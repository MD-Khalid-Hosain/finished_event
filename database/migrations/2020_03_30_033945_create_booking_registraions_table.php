<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRegistraionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_registraions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('event_title');
            $table->string('event_category');
            $table->date('published_at');
            $table->string('event_location');
            $table->string('event_time');
            $table->integer('event_cost');
            $table->integer('per_person_cost');
            $table->integer('total_cost');
            $table->integer('people');
            $table->integer('payment_method');
            $table->string('payment_status');
            $table->integer('transection_id')->nullable();
            $table->text('user_number');
            $table->integer('bkash_amount')->nullable();
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
        Schema::dropIfExists('booking_registraions');
    }
}
