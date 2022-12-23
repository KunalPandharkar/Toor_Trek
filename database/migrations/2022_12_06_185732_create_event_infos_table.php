<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('offers')->nullable();
            $table->string('type')->nullable();
            $table->string('duration')->nullable();
            $table->string('destination')->nullable();
            $table->integer('price')->nullable();
            $table->integer('mrp')->nullable();
            $table->string('discount')->nullable();
            $table->text('details')->nullable();
            $table->date('departure')->nullable();
            $table->text('description')->nullable();


            $table->foreignId('event_category_id')
            ->constrained('event_categories')
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
        Schema::dropIfExists('event_infos');
    }
}
