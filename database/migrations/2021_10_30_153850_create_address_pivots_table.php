<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressPivotsTable extends Migration {

	public function up()
	{
		Schema::create('address_pivots', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('address_id')->unsigned()->index();
			$table->string('relationship', 63)->nullable();
			$table->string('name', 127)->nullable();
			$table->text('description')->nullable();
			$table->boolean('is_active')->index()->default(true);
			$table->boolean('is_primary')->index()->default(false);
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('address_pivots');
	}
}