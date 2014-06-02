<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('startups', function($table)
            {
                $table->increments('id');
                $table->string('email')->unique();
                $table->string('startup_name');
                $table->string('submitter_name');
                $table->string('url');
                $table->text('one_sentence_description');
                $table->text('description');
                $table->string('categories');
                $table->string('lets_you');
                $table->string('type');
                $table->timestamps();
            }
        );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('startups');
	}

}
