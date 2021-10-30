<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->uuid('uuid')->unique();
			$table->string('name');
			$table->string('email')->unique();
			$table->string('username')->unique()->nullable();
			$table->string('password')->nullable();
			$table->timestamp('password_updated_at')->nullable();
			$table->boolean('is_registered')->index()->default(false);
			$table->boolean('is_active')->index()->default(true);
			$table->string('phone', 63)->unique()->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->string('remember_token')->nullable();
			$table->boolean('2fa_is_enabled')->index()->default(false);
			$table->string('2fa_secret')->nullable();
			$table->timestamp('2fa_updated_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}