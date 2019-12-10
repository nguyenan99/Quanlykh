<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuoihocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buoihoc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('noidung');
            $table->date('thoigian');
            $table->integer('diemdanh');
            $table->integer('idlophoc');
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
        Schema::dropIfExists('buoihoc');
    }
}
