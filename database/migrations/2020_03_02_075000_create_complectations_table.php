<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complectations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->enum('type', ['автоматическая', 'механическая', 'роботизированная', 'бензиновый 1.6', 'бензиновый 2.0' , 'бензиновый 2.4', 'бензиновый 3.5', 'дизельный 2.2']);
            $table->string('pic');
            $table->integer('car_id');
            $table->integer('price');
            $table->integer('price_credit');
            $table->string('description');
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
        Schema::dropIfExists('complectations');
    }
}
