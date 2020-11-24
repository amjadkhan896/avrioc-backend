<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id()->unsigned();;
            $table->string('name');
            $table->text('description');
            $table->decimal('rating', 16, 2);
            $table->date('release_date');
            $table->decimal('ticket_price', 16, 2);
            $table->string('country');
            $table->unsignedBigInteger('genre');
            $table->string('photo');
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
        Schema::dropIfExists('films');
    }
}