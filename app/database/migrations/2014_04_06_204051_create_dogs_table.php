<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dogs', function(Blueprint $table)
		{
			$table->engine = 'INNODB';
			$table->increments('id')->unique();
		});

		Schema::table('dogs', function(Blueprint $table)
		{
			$table->dropPrimary('id');
			$table->bigInteger('dog_id')->unsigned()->primary();
			$table->bigInteger('human')->unsigned();
			$table->string('name');
			$table->string('breed');
			$table->string('dogPicture');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dogs');		
	}

}
