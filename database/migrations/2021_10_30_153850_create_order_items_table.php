<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemsTable extends Migration {

	public function up()
	{
		Schema::create('order_items', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('product_id')->unsigned()->index();
			$table->integer('order_id')->unsigned()->index();
			$table->float('quantity');
			$table->integer('category_id')->unsigned()->nullable()->index();
			$table->string('category_title', 127)->nullable();
			$table->string('title');
			$table->text('description')->nullable();
			$table->decimal('total', 16,2);
			$table->decimal('price', 16,2);
			$table->string('unit_abbv', 63)->nullable();
			$table->string('unit_symbol', 15)->nullable();
			$table->string('remarks')->nullable();
			$table->float('weight')->nullable();
			$table->jsonb('data')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('order_items');
	}
}