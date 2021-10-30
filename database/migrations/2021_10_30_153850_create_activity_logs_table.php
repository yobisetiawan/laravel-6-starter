<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityLogsTable extends Migration {

	public function up()
	{
		Schema::create('activity_logs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->timestamp('date');
			$table->smallInteger('activity')->unsigned()->index();
			$table->integer('doctor_id')->unsigned()->index();
			$table->integer('customer_id')->unsigned()->nullable()->index();
			$table->integer('patient_id')->unsigned()->nullable()->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->text('remarks')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('activity_logs');
	}
}