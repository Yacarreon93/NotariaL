<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('service', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->enum('service_type',['enagenante','no_enagenante']);


			$table->integer('document_id')->unsigned();
			
			$table->integer('expense_id')->unsigned();

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
		//
		Schema::drop('service');
	}

}
