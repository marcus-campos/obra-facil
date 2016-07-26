<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServiceHasLaborTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('service_has_labor', function(Blueprint $table)
		{
			$table->foreign('labor_id', 'fk_service_has_labor_labor1')->references('id')->on('labor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('service_id', 'fk_service_has_labor_service')->references('id')->on('service')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('service_has_labor', function(Blueprint $table)
		{
			$table->dropForeign('fk_service_has_labor_labor1');
			$table->dropForeign('fk_service_has_labor_service');
		});
	}

}
