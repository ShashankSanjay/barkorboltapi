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
			$table->unsignedInteger('dog')->nullable();
			$table->string('name');
			$table->string('humanPicture')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('humans', function(Blueprint $table)
		{
			$table->dropForeign('humans_dog_foreign');
			$table->dropUnique('dogs_id_unique');
		});
		Schema::drop('humans');
	}

}