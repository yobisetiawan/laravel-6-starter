<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('product_categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->string('title', 127);
			$table->text('description')->nullable();
			$table->integer('parent_id')->unsigned()->nullable()->index();
			$table->boolean('is_active')->index()->default(true);
			$table->integer('index')->unsigned()->nullable()->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('product_categories');
	}
}