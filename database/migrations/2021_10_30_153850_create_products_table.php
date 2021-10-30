<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->uuid('uuid')->unique();
			$table->integer('category_id')->unsigned()->nullable()->index();
			$table->integer('parent_id')->unsigned()->nullable()->index();
			$table->string('title');
			$table->text('description')->nullable();
			$table->integer('unit_id')->unsigned()->index();
			$table->float('weight');
			$table->jsonb('data')->nullable();
			$table->boolean('is_active')->index()->default(false);
			$table->timestamp('published_at')->nullable();
			$table->timestamp('depublished_at')->nullable();
			$table->boolean('published')->default(false);
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}