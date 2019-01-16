<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubscriptionsTable extends Migration {

	public function up()
	{
		Schema::create('subscriptions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->enum('subscription_type', array('weekly', 'monthly', 'yearly'));
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('subscriptions');
	}
}