<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceHasMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_has_material', function(Blueprint $table)
		{
			$table->integer('service_id')->index('fk_service_has_material_service1_idx');
			$table->integer('material_id')->index('fk_service_has_material_material1_idx');
			$table->primary(['service_id','material_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('service_has_material');
	}

}
