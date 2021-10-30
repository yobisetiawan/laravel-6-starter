<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouponTemplatesTable extends Migration {

	public function up()
	{
		Schema::create('coupon_templates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->uuid('uuid')->unique();
			$table->string('code', 63)->nullable()->index();
			$table->string('title')->nullable();
			$table->text('description')->nullable();
			$table->float('discount_percentage')->nullable();
			$table->decimal('discount_amount', 16,2)->nullable();
			$table->decimal('discount_max', 16,2)->nullable();
			$table->boolean('is_active')->index()->default(false);
			$table->integer('created_by')->unsigned()->nullable()->index();
			$table->integer('updated_by')->unsigned()->nullable()->index();
			$table->timestamp('expired_at')->nullable();
			$table->timestamp('valid_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('coupon_templates');
	}
}