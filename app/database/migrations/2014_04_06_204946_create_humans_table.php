<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('humans', function(Blueprint $table)
		{
			$table->engine = 'INNODB';
			$table->increments('id')->unique();
		});

		Schema::table('humans', function(Blueprint $table)
		{
			$table->dropPrimary('id');
			$table->bigInteger('human_id')->unsigned()->primary();
			$table->bigInteger('dog')->unsigned();
			$table->string('name');
			$table->string('humanPicture');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('humans');
	}

}