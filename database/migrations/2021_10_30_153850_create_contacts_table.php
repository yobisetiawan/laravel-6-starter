<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->string('name');
			$table->tinyInteger('gender')->unsigned()->index();
			$table->date('dob')->nullable();
			$table->string('pob')->nullable();
			$table->integer('index')->unsigned()->nullable()->index();
			$table->string('relationship', 63)->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}