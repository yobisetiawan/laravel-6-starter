<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSyncObjectItemsTable extends Migration {

	public function up()
	{
		Schema::create('sync_object_items', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('object_id')->unsigned()->index();
			$table->string('origin_column', 127);
			$table->string('destination_column', 127);
			$table->boolean('is_pk')->index()->default(false);
			$table->boolean('is_title')->index()->default(false);
			$table->jsonb('data')->nullable();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('sync_object_items');
	}
}