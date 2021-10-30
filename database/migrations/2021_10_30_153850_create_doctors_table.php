<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('doctors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('number')->unique()->nullable();
			$table->string('doctor_number', 127)->unique()->nullable();
			$table->string('name');
			$table->uuid('uuid')->unique();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->boolean('is_active')->index()->default(true);
		});
	}

	public function down()
	{
		Schema::drop('doctors');
	}
}