<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWishlistsTable extends Migration {

	public function up()
	{
		Schema::create('wishlists', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('customer_id')->unsigned()->index();
			$table->uuid('uuid')->unique();
			$table->integer('product_id')->unsigned()->index();
			$table->integer('seller_id')->unsigned()->nullable()->index();
			$table->integer('index')->unsigned()->nullable()->index();
			$table->integer('category_id')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('wishlists');
	}
}