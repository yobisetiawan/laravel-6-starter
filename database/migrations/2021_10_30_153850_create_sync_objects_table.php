<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSyncObjectsTable extends Migration {

	public function up()
	{
		Schema::create('sync_objects', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 127);
			$table->text('description')->nullable();
			$table->string('origin_table', 127);
			$table->string('origin_class', 127)->nullable();
			$table->string('destination_table', 127);
			$table->string('destination_class', 127)->nullable();
			$table->jsonb('data')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->uuid('uuid')->unique();
		});
	}

	public function down()
	{
		Schema::drop('sync_objects');
	}
}