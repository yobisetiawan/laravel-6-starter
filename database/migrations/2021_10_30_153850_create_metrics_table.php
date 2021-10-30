<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetricsTable extends Migration {

	public function up()
	{
		Schema::create('metrics', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->uuid('uuid')->unique();
			$table->string('title', 127);
			$table->text('description')->nullable();
			$table->integer('index')->unsigned()->nullable()->index();
			$table->jsonb('data')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('metrics');
	}
}