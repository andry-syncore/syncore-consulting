<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendampinganSaabsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('pendampingan_saabs', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('slug');
         $table->text('objective');
         $table->text('benefit');
         $table->text('output');
         $table->text('feature');
         $table->text('work_program');
         $table->text('cost');
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
      Schema::dropIfExists('pendampingan_saabs');
   }
}
