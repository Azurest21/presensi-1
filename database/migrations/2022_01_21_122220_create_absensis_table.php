<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Absensi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('matkul_id');
            $table->string('pertemuan',50);
            $table->bigInteger('user_id');
            $table->date("tgl");
            $table->time('jammasuk')->nullable();
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
        Schema::dropIfExists('Absensi');
    }
}
