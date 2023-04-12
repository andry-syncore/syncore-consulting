<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisetKajiansTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('riset_kajians', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('slug');
         $table->text('objective');
         $table->text('agenda');
         $table->string('cost');
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
      Schema::dropIfExists('riset_kajians');
   }
}
