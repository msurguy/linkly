<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('links', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('statistics', function(Blueprint $table) {
			$table->foreign('link_id')->references('id')->on('links')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('payments', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('subscriptions', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('link_tag', function(Blueprint $table) {
			$table->foreign('link_id')->references('id')->on('links')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('link_tag', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tags', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('user_group', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_group', function(Blueprint $table) {
			$table->foreign('group_id')->references('id')->on('groups')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('links', function(Blueprint $table) {
			$table->dropForeign('links_user_id_foreign');
		});
		Schema::table('statistics', function(Blueprint $table) {
			$table->dropForeign('statistics_link_id_foreign');
		});
		Schema::table('payments', function(Blueprint $table) {
			$table->dropForeign('payments_user_id_foreign');
		});
		Schema::table('subscriptions', function(Blueprint $table) {
			$table->dropForeign('subscriptions_user_id_foreign');
		});
		Schema::table('link_tag', function(Blueprint $table) {
			$table->dropForeign('link_tag_link_id_foreign');
		});
		Schema::table('link_tag', function(Blueprint $table) {
			$table->dropForeign('link_tag_tag_id_foreign');
		});
		Schema::table('tags', function(Blueprint $table) {
			$table->dropForeign('tags_user_id_foreign');
		});
		Schema::table('user_group', function(Blueprint $table) {
			$table->dropForeign('user_group_user_id_foreign');
		});
		Schema::table('user_group', function(Blueprint $table) {
			$table->dropForeign('user_group_group_id_foreign');
		});
	}
}