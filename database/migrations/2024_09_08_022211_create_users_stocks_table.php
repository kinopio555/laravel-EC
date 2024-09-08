<?php

/*use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*public function up(): void
    {
        Schema::create('users_stocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    /*public function down(): void
    {
        Schema::dropIfExists('users_stocks');
    }
};*/


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// class CreateCartsTable extends Migration
return new class extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('users_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('stockId');
            $table->integer('userId');
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
        Schema::dropIfExists('users_tables');
    }
 }
 
