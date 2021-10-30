<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSyncHistoriesTable extends Migration {

	public function up()
	{
		Schema::create('sync_histories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->timestamp('date')->index();
			$table->integer('record_id')->unsigned()->index();
			$table->tinyInteger('type')->unsigned()->index();
			$table->text('remarks')->nullable();
			$table->tinyInteger('status')->unsigned()->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('sync_histories');
	}
}