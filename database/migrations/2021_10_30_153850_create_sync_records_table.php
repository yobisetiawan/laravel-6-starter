<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSyncRecordsTable extends Migration {

	public function up()
	{
		Schema::create('sync_records', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('object_id')->unsigned()->index();
			$table->integer('origin_id')->unsigned()->index();
			$table->integer('destination_id')->unsigned()->index();
			$table->timestamp('origin_created_at')->nullable();
			$table->timestamp('origin_updated_at')->nullable();
			$table->timestamp('destination_created_at')->nullable();
			$table->timestamp('destination_updated_at')->nullable();
			$table->jsonb('data')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('sync_records');
	}
}