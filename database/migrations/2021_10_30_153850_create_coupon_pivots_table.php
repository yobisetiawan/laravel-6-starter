<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouponPivotsTable extends Migration {

	public function up()
	{
		Schema::create('coupon_pivots', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('coupon_id')->unsigned()->index();
			$table->string('relationship', 63)->index();
			$table->integer('ref_id')->unsigned()->index();
			$table->string('ref_table', 127)->index();
			$table->string('ref_model', 127)->index();
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->text('remarks')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('coupon_pivots');
	}
}