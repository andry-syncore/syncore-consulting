<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInkubasiBisnisTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('inkubasi_bisnis', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('slug');
         $table->text('background');
         $table->string('objective');
         $table->text('scope');
         $table->string('methodology');
         $table->text('result');
         $table->text('execution_time');
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
      Schema::dropIfExists('inkubasi_bisnis');
   }
}
