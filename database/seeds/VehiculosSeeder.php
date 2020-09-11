<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('vehiculos')->insert(array(
                'propietario_id' => random_int(1, 50),
                'modelo' => $faker->randomElement(['2018', '2019', '2020']),
                'placa' =>  $faker->randomElement(['z', 'w', 't', 'v', 'x', 'o']) .   $faker->randomElement(['a', 'b', 'z', 'w', 't']) .  $faker->randomElement(['z', 'w', 't', 'u', 'k', 'c']) .  '-'  . $faker->randomElement(['2018', '2019', '2020']),
                'color' => $faker->randomElement(['blaco', 'negro', 'azul', 'rojo']),
                'marca' => $faker->randomElement(['Kia', 'Renault', 'Bmw', 'Bugatti']),
            ));
        }
    }
}
