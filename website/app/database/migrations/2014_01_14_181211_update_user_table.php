<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->softDeletes();
			$table->dropColumn('first_name');
			$table->dropColumn('last_name');
			$table->string('username');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->string('first_name');
			$table->string('last_name');
			$table->dropColumn('username','deleted_at');
		});
	}

}
