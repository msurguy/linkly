<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatisticsTable extends Migration {

	public function up()
	{
		Schema::create('statistics', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('link_id')->unsigned();
			$table->enum('event_type', array('created', 'viewed'));
			$table->string('ip', 255);
		});
	}

	public function down()
	{
		Schema::drop('statistics');
	}
}