<?php

use Illuminate\Database\Migrations\Migration;

class DropName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('users', function($table)
            {
                $table->dropColumn('name');
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
        Schema::table('users', function($table)
            {
                $table->string('name');
            }
        );
	}

}
