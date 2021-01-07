<?php

use App\Pelicula;
use Illuminate\Database\Seeder;

class PeliculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Pelicula::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        Pelicula::create([
            'name' => 'Los Vengadores',
            'code' => '003154',
            'year'=>'2019-01-25',
            'available' => 'true',
        ]);
        for ($i = 0; $i < 50; $i++) {
            Pelicula::create([
                'name' => $faker->name,
                'code' => $faker->sentence,
                'year' => $faker->date($format='Y-m-d'),
                'available' => $faker->boolean,
            ]);
        }
    }
}
