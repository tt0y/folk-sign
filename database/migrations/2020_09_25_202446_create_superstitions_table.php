<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperstitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superstitions', function (Blueprint $table) {
            $table->id();

            $table->integer('day');
            $table->integer('month');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('full_text')->nullable();

            $table->timestamps();
            $table->index(['day', 'month']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superstitions');
    }
}
