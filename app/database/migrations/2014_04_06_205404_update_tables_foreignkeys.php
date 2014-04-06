<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablesForeignkeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::table('humans', function(Blueprint $table)
		{
			$table->foreign('dog')->references('dog_id')->on('dogs');
		});

		Schema::table('dogs', function(Blueprint $table)
		{
			$table->foreign('human')->references('human_id')->on('humans');
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
	}

}
