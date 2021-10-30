<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStocksTable extends Migration {

	public function up()
	{
		Schema::create('stocks', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('product_id')->unsigned()->index();
			$table->integer('seller_id')->unsigned()->index();
			$table->string('batch')->nullable();
			$table->timestamp('expired_at')->nullable();
			$table->timestamp('manufactured_at')->nullable();
			$table->integer('index')->unsigned()->nullable()->index();
			$table->float('quantity_total')->index();
			$table->float('quantity_buffered')->nullable();
			$table->float('quantity_available');
			$table->integer('regency_id')->unsigned()->nullable()->index();
			$table->text('remarks')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('stocks');
	}
}