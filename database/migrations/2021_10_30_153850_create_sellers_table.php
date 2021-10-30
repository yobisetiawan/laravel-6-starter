<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSellersTable extends Migration {

	public function up()
	{
		Schema::create('sellers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->uuid('uuid')->unique();
			$table->string('name');
			$table->integer('parent_id')->unsigned()->nullable()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->string('number', 127)->unique();
			$table->integer('regency_id')->unsigned()->nullable()->index();
			$table->integer('index')->unsigned()->nullable()->index();
			$table->boolean('is_active')->index()->default(true);
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->string('phone', 63);
		});
	}

	public function down()
	{
		Schema::drop('sellers');
	}
}