<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('amount')->nullable();
            $table->string('razorpay_id')->nullable();
            $table->string('order_id')->nullable();
            $table->boolean('isPaid')->default(0);

            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade');

           

            $table->foreignId('booking_id')
            ->constrained('bookings')
            ->onDelete('cascade');

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
        Schema::dropIfExists('payments');
    }
}
