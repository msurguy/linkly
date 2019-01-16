<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserGroupTable extends Migration {

	public function up()
	{
		Schema::create('user_group', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('group_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('user_group');
	}
}