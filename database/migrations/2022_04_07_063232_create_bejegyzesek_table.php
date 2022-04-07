<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBejegyzesekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bejegyzesek', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tevekenyseg_id');
            $table->foreign('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenyseg');
            $table->char('osztaly_id', 10);
            $table->string('allapot', 20);
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
        Schema::dropIfExists('bejegyzesek');
    }
}
