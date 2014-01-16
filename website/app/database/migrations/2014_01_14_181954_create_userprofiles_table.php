<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserprofilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('articleRead')->nullable()->default(0);
			$table->integer('articleDownloaded')->nullable()->default(0);
			$table->integer('articleClicked')->nullable()->default(0);
			$table->integer('feedMaxArticle')->nullable()->default(400);
			$table->smallInteger('articlePerPage')->nullable()->default(null);
			$table->smallInteger('syncType')->default(1);
			$table->string('syncCode', 20);

			// $table->integer('user_id')->unsigned();
			// $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_profiles', function(Blueprint $table) {
			$table->dropForeign('user_profiles_user_id_foreign');
		});
		Schema::drop('user_profiles');
	}

}
