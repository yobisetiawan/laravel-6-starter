<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductPricesTable extends Migration {

	public function up()
	{
		Schema::create('product_prices', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('product_id')->unsigned()->index();
			$table->integer('seller_id')->unsigned()->nullable()->index();
			$table->char('currency_code', 3)->index();
			$table->boolean('is_active')->nullable()->index()->default(true);
			$table->timestamp('published_at')->nullable();
			$table->timestamp('depublished_at')->nullable();
			$table->boolean('is_published')->index()->default(false);
			$table->decimal('price', 16,2);
			$table->integer('min_quantity')->unsigned()->nullable();
			$table->integer('max_quantity')->unsigned()->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('product_prices');
	}
}