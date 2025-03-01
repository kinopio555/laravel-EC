<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('stocks', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->timestamps();
           $table->string('name','100');
           $table->string('explain','500');
           $table->integer('fee');
           $table->string('imagePath','200');
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('stocks');
   }
}