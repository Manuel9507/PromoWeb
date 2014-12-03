<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('email');
			$table->string('password');
			$table->string('telefono');
			$table->rememberToken();
			$table->timestamps();
		});

		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('prioridad');
			$table->text('contenido');
			$table->string('imagen');
			$table->string('descripcion');
			$table->float('costo');
			$table->string('tiempoPubli');
			$table->timestamps();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ads');

			Schema::drop('users');
	}

}
