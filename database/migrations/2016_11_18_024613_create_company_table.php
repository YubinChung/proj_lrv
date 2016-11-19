<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->increments('id');
			$table->string('page_name')->nullable();
			$table->string('cat')->nullable();
			$table->string('title')->nullable();
			$table->text('body')->nullable();
			$table->text('desc')->nullable();
			$table->string('link')->nullable();
			$table->string('iconclass')->nullable();
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
        Schema::drop('companys');
		Schema::dropIfExists('companys');
    }
}
