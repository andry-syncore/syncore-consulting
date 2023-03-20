<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramPendampingansTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('program_pendampingans', function (Blueprint $table) {
         $table->id();
         $table->string('name')->unique();
         $table->string('slug')->unique();
         $table->text('background');
         $table->text('objective');
         $table->text('scope');
         $table->string('methodology');
         $table->text('documents');
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
      Schema::dropIfExists('program_pendampingans');
   }
}
