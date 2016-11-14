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
            //$table->increments('id');
            $table->string('name');
			$table->text('description')->nullable();
			$table->text('detail_link');
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
        Schema::drop('Featuredworks');
		Schema::dropIfExists('Featuredworks');
    }
}
