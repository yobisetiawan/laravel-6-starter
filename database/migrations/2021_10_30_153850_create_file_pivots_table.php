<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilePivotsTable extends Migration {

	public function up()
	{
		Schema::create('file_pivots', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('file_id')->unsigned()->index();
			$table->integer('ref_id')->unsigned()->index();
			$table->string('ref_table', 127);
			$table->string('ref_model', 127)->index();
			$table->string('relationship', 63)->index();
			$table->integer('index')->nullable()->index();
			$table->string('title', 127)->nullable();
			$table->text('description')->nullable();
			$table->boolean('is_primary')->index()->default(false);
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('file_pivots');
	}
}