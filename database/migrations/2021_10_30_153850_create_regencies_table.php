<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegenciesTable extends Migration {

	public function up()
	{
		Schema::create('regencies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->tinyInteger('type')->unsigned()->nullable()->index();
			$table->integer('province_id')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('parent_id')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('regencies');
	}
}