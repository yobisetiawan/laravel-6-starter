<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPasswordsTable extends Migration {

	public function up()
	{
		Schema::create('user_passwords', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('user_id')->unsigned()->index();
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('user_passwords');
	}
}