<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinksTable extends Migration {

	public function up()
	{
		Schema::create('links', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 600);
			$table->string('slug', 8)->nullable();
			$table->string('destination', 2048);
			$table->integer('views')->default('0');
			$table->integer('user_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('links');
	}
}