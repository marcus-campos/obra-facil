<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('service', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_service_category1')->references('id')->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('service', function(Blueprint $table)
		{
			$table->dropForeign('fk_service_category1');
		});
	}

}
