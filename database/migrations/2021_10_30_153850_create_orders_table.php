<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->string('number', 127)->nullable();
			$table->integer('group_id')->unsigned()->index();
			$table->integer('seller_id')->unsigned()->index();
			$table->char('currency_code', 3);
			$table->decimal('amount_item', 16,2);
			$table->decimal('amount_tax', 16,2)->nullable();
			$table->decimal('amount_discount', 16,2)->nullable();
			$table->decimal('amount_coupon', 16,2)->nullable();
			$table->decimal('amount_shipping', 16,2)->nullable();
			$table->decimal('amount_insurance', 16,2)->nullable();
			$table->decimal('total', 16,2);
			$table->float('total_weight')->nullable();
			$table->jsonb('data')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}