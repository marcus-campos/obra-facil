<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('material', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45);
			$table->float('price', 10, 3);
			$table->enum('location', array('0','1'));
			$table->string('desc', 500)->nullable();
			$table->integer('units_id')->index('fk_material_units1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('material');
	}

}
