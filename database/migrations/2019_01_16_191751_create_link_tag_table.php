<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinkTagTable extends Migration {

	public function up()
	{
		Schema::create('link_tag', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('link_id')->unsigned();
			$table->integer('tag_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('link_tag');
	}
}