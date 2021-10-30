<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProvincesTable extends Migration {

	public function up()
	{
		Schema::create('provinces', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->uuid('uuid')->unique();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->integer('parent_id')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('provinces');
	}
}