<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionItemsTable extends Migration {

	public function up()
	{
		Schema::create('prescription_items', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('prescription_id')->unsigned()->index();
			$table->integer('product_id')->unsigned()->nullable()->index();
			$table->string('title');
			$table->string('description', 127)->nullable();
			$table->string('dosage', 127);
			$table->float('quantity');
			$table->boolean('is_regulated')->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('prescription_items');
	}
}