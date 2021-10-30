<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWishlistCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('wishlist_categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->string('title', 127);
			$table->text('description')->nullable();
			$table->integer('customer_id')->unsigned()->index();
			$table->integer('index')->unsigned()->nullable()->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('wishlist_categories');
	}
}