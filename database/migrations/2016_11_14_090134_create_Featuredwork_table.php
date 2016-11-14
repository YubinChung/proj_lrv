<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Featuredworks', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('Featuredworks_id')->unsigned();
			$table->foreign('Featuredworks_id')->references('id')->on('Featuredworks');
            $table->string('name', 50);
			$table->text('description')->nullable();
			$table->timestamps();]
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Featuredworks');
		Schema::dropIfExists('Featuredworks');
    }
}
