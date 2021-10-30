<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalysisSessionsTable extends Migration {

	public function up()
	{
		Schema::create('analysis_sessions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('customer_id')->unsigned()->index();
			$table->integer('type_id')->unsigned()->index();
			$table->timestamp('issued_at')->nullable();
			$table->timestamp('processed_at')->nullable();
			$table->timestamp('finished_at')->nullable();
			$table->timestamp('expired_at')->nullable();
			$table->string('number', 127)->unique()->nullable();
			$table->string('name');
			$table->tinyInteger('gender')->unsigned();
			$table->smallInteger('status')->unsigned()->index()->default('1');
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->integer('patient_id')->unsigned()->index();
			$table->jsonb('data')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('analysis_sessions');
	}
}