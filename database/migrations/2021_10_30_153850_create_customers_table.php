<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->uuid('uuid')->unique();
			$table->string('name')->index();
			$table->tinyInteger('gender')->unsigned()->nullable();
			$table->date('dob')->nullable();
			$table->string('pob')->nullable();
			$table->integer('user_id')->unsigned()->index();
			$table->string('number', 127)->nullable()->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->boolean('is_active')->index()->default(true);
		});
	}

	public function down()
	{
		Schema::drop('customers');
	}
}