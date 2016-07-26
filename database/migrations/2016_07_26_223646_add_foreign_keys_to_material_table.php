<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('material', function(Blueprint $table)
		{
			$table->foreign('units_id', 'fk_material_units1')->references('id')->on('units')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('material', function(Blueprint $table)
		{
			$table->dropForeign('fk_material_units1');
		});
	}

}
