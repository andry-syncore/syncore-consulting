<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramPelatihansTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('program_pelatihans', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('slug');
         $table->text('objective');
         $table->text('agenda');
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
      Schema::dropIfExists('program_pelatihans');
   }
}
