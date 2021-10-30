<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionsTable extends Migration {

	public function up()
	{
		Schema::create('prescriptions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('parent_id')->unsigned()->nullable()->index();
			$table->integer('customer_id')->unsigned()->index();
			$table->integer('doctor_id')->unsigned()->index();
			$table->integer('patient_id')->unsigned()->index();
			$table->string('number', 127)->unique()->nullable();
			$table->timestamp('prescribed_at')->nullable();
			$table->timestamp('expired_at')->nullable();
			$table->jsonb('data')->nullable();
			$table->tinyInteger('status')->unsigned()->index()->default('1');
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('prescriptions');
	}
}