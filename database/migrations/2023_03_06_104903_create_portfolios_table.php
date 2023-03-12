<?php

use App\Models\CategoryPortfolio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CategoryPortfolio::class);
            $table->string('title');
            $table->string('slug');
            $table->string('client');
            $table->string('location');
            $table->string('year');
            $table->text('background');
            $table->text('problem');
            $table->text('solution');
            $table->text('metodologi');
            $table->text('result');
            $table->string('photos')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
