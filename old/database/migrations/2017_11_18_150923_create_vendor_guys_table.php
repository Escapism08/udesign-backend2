<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatevendorguysTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_guys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor_name');
            $table->string('vendor_brand');
            $table->string('vendor_password');
            $table->integer('vendor_sales');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendor_guys');
    }
}
