<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockBuffersTable extends Migration {

	public function up()
	{
		Schema::create('stock_buffers', function(Blueprint $table) {
			$table->timestamps();
			$table->integer('stock_id')->primary()->unsigned()->nullable()->index();
			$table->integer('order_id')->unsigned()->index();
			$table->integer('customer_id')->unsigned()->nullable()->index();
			$table->float('quantity');
			$table->text('remarks')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('stock_buffers');
	}
}