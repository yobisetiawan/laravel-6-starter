<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetricRulesTable extends Migration {

	public function up()
	{
		Schema::create('metric_rules', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('parent_id')->unsigned()->nullable()->index();
			$table->integer('prototype_id')->unsigned()->index();
			$table->integer('metric_id')->unsigned()->index();
			$table->smallInteger('operator')->unsigned()->index();
			$table->float('value');
			$table->integer('index')->unsigned()->nullable()->index();
			$table->boolean('is_and');
			$table->boolean('is_active');
			$table->text('remarks')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('metric_rules');
	}
}