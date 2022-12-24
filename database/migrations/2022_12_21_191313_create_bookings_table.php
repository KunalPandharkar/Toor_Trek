<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();
            $table->string('people')->nullable();
            $table->string('male')->nullable();
            $table->string('female')->nullable();
            $table->string('kids')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('isPaid')->nullable()->default(false);

            $table->foreignId('event_info_id')
            ->constrained('event_infos')
            ->onDelete('cascade');

            $table->foreignId('user_id')
            ->constrained('users')
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
        Schema::dropIfExists('bookings');
    }
}
