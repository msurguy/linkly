<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('ip', 255);
			$table->float('amount', 8,2);
			$table->enum('type', array('card', 'paypal', 'check'));
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}