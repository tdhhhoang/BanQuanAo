<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblKhuvucProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_khuvuc', function (Blueprint $table) {
            $table->Increments('khuvuc_id');
            $table->string('khuvuc_name');
            $table->text('khuvuc_desc');
            $table->integer('khuvuc_status');
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
        Schema::dropIfExists('tbl_khuvuc');
    }
}
