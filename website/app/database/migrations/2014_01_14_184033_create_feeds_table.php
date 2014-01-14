<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});


		Schema::create('feeds', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('description')->nullable();
			$table->string('website')->nullable();
			$table->string('url')->nullable();
			$table->timestamp('lastUpdate')->nullable();

			$table->integer('category_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categories');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_user_id_foreign');
		});
		
		Schema::table('feeds', function(Blueprint $table) {
			$table->dropForeign('feeds_category_id_foreign');
			$table->dropForeign('feeds_user_id_foreign');
		});
		
		Schema::drop('categories');
		Schema::drop('feeds');
	}

}
