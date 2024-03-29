<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServiceHasMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('service_has_material', function(Blueprint $table)
		{
			$table->foreign('material_id', 'fk_service_has_material_material1')->references('id')->on('material')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('service_id', 'fk_service_has_material_service1')->references('id')->on('service')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('service_has_material', function(Blueprint $table)
		{
			$table->dropForeign('fk_service_has_material_material1');
			$table->dropForeign('fk_service_has_material_service1');
		});
	}

}
