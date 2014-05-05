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
			$table->unsignedInteger('human')->nullable();
			$table->string('name');
			$table->string('breed');
			$table->string('dogPicture')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dogs', function(Blueprint $table)
		{
			$table->dropForeign('dogs_human_foreign');
			$table->dropUnique('humans_id_unique');
		});
		Schema::drop('dogs');	
	}

}
