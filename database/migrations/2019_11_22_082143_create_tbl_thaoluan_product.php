<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblThaoluanProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_thaoluan', function (Blueprint $table) {
           $table->Increments('thaoluan_id');
            $table->string('thaoluan_name');
            $table->text('thaoluan_desc');
            $table->integer('thaoluan_status');
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
        Schema::dropIfExists('tbl_thaoluan');
    }
}
