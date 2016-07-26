<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceHasLaborTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_has_labor', function(Blueprint $table)
		{
			$table->integer('service_id')->index('fk_service_has_labor_service_idx');
			$table->integer('labor_id')->index('fk_service_has_labor_labor1_idx');
			$table->float('price_hour', 10);
			$table->primary(['service_id','labor_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('service_has_labor');
	}

}
