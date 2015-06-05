<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductorsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productors', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('full_Name');
			$table->string('first_Name')->nullable()->required();
            $table->string('second_Name')->nullable();
            $table->string('last_Name')->nullable()->required();
            $table->string('secondlast_Name')->nullable();
            $table->string('identificacion')->nullable();
			$table->string('phone');
			$table->string('celular');
			$table->string('email')->unique()->required();
			$table->text('address')->nullable();
			$table->string('asociacion');
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
		Schema::drop('productors');
	}

}
