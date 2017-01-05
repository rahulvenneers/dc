<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_name');
            $table->string('addr_line1');
            $table->string('addr_line2');
            $table->string('city');
            $table->integer('emirate_id')->unsigned();
            $table->string('loc');
            $table->enum('is_deleted', ['yes', 'no']);
            $table->timestamps();
            
        });
         Schema::table('stores', function ( $table) {
            $table->foreign('emirate_id')->references('id')->on('emirates')->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        Schema::dropIfExists('stores');
        
    }
}
