<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration {

	public function up()
	{
		Schema::create('patients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->uuid('uuid')->unique();
			$table->integer('user_id')->unsigned()->index();
			$table->string('number', 127)->unique()->nullable();
			$table->string('name', 127);
			$table->tinyInteger('gender')->unsigned()->nullable();
			$table->date('dob')->nullable();
			$table->string('pob')->nullable();
			$table->string('email')->nullable();
			$table->string('phone', 63)->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->boolean('is_active')->index()->default(true);
		});
	}

	public function down()
	{
		Schema::drop('patients');
	}
}