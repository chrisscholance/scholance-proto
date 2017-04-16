<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('projects', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('summary');
			$table->integer('poster_id')->unsigned();
			$table->string('category');
			$table->text('description');
			$table->boolean('flagged')->default(false);
			$table->timestamps();

			$table->foreign('poster_id')->references('id')->on('users');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('projects');
    }
}
