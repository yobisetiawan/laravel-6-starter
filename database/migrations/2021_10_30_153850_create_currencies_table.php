<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrenciesTable extends Migration {

	public function up()
	{
		Schema::create('currencies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 127);
			$table->char('code', 3)->index();
			$table->string('symbol', 7);
			$table->boolean('is_primary')->index()->default(false);
			$table->boolean('is_active')->index()->default(true);
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->uuid('uuid')->unique();
		});
	}

	public function down()
	{
		Schema::drop('currencies');
	}
}