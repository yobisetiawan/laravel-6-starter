<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->text('address')->nullable();
			$table->integer('regency_id')->unsigned()->nullable()->index();
			$table->string('regency_name')->nullable();
			$table->string('province_name')->nullable();
			$table->char('country_code', 3)->nullable()->index();
			$table->string('zip', 7)->nullable();
			$table->string('phone', 31)->nullable();
			$table->string('landline', 31)->nullable();
			$table->string('fax', 31)->nullable();
			$table->jsonb('geo')->nullable();
			$table->string('email')->nullable();
			$table->string('website')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('addresses');
	}
}