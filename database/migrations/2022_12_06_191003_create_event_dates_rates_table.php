<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventDatesRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_dates_rates', function (Blueprint $table) {
            $table->id();
            $table->string('duration')->nullable();
            $table->string('variant')->nullable();
            $table->date('date')->nullable();
            $table->integer('price')->nullable();
            $table->foreignId('event_info_id')
            ->constrained('event_infos')
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
        Schema::dropIfExists('event_dates_rates');
    }
}
