<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration {

	public function up()
	{
		Schema::create('files', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->uuid('uuid')->unique();
			$table->string('url_real');
			$table->string('url')->nullable();
			$table->string('extension', 15)->index();
			$table->float('size');
			$table->string('storage', 63)->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('files');
	}
}