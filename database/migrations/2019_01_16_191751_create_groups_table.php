<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupsTable extends Migration {

	public function up()
	{
		Schema::create('groups', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->enum('type', array('admin', 'company', 'aggregator', 'basic'));
		});
	}

	public function down()
	{
		Schema::drop('groups');
	}
}