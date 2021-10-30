<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultationsTable extends Migration {

	public function up()
	{
		Schema::create('consultations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('doctor_id')->unsigned()->index();
			$table->integer('patient_id')->unsigned()->index();
			$table->integer('customer_id')->unsigned()->index();
			$table->string('number')->unique()->nullable();
			$table->text('assessment')->nullable();
			$table->text('diagnose')->nullable();
			$table->text('treatment')->nullable();
			$table->timestamp('started_at')->nullable();
			$table->timestamp('finished_at')->nullable();
			$table->smallInteger('status')->unsigned()->index()->default('1');
			$table->jsonb('data')->nullable();
			$table->text('remarks')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('consultations');
	}
}