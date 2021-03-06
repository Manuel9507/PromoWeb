<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdsTableSeeder extends Seeder {

	public function run()
	{
		$ads = array(['titulo' => 'Prueba', 'prioridad' => 'Alta', 'contenido' => 'Hola que tal este es el primer anuncio de prueba', 'imagen' => '1.jpg', 'descripcion' => 'anuncio publicitario', 'costo' => 20.95, 'tiempoPubli' => '1 dia', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'user_id' => 2],
					 ['titulo' => 'Bimbo Te Nutre', 'prioridad' => 'Media', 'contenido' => 'Bimbo Nito Pidelo en tu tiendita más cercana :D', 'imagen' => '2.jpg', 'descripcion' => 'anuncio publicitario', 'costo' => 18.95, 'tiempoPubli' => '1 dia', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'user_id' => 2]);
	
		DB::table('ads')->insert($ads);
	}

}