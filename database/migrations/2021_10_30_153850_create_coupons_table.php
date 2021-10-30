<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouponsTable extends Migration {

	public function up()
	{
		Schema::create('coupons', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->integer('template_id')->unsigned()->nullable()->index();
			$table->string('code', 31)->index();
			$table->float('discount_percentage')->nullable();
			$table->decimal('discount_amount', 16,2)->nullable();
			$table->decimal('discount_max', 16,2)->nullable();
			$table->timestamp('expired_at')->nullable();
			$table->timestamp('valid_at')->nullable();
			$table->boolean('is_active')->nullable()->default(false);
			$table->timestamp('used_at')->nullable();
			$table->string('title')->nullable();
			$table->text('description')->nullable();
			$table->boolean('is_invalid')->index()->default(true);
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('coupons');
	}
}