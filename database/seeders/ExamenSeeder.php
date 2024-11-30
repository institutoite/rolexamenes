<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('examens')->insert([
                'titulo' => $faker->sentence,  // Título del examen (oración aleatoria)
                'descripcion' => $faker->paragraph,  // Descripción del examen (párrafo aleatorio)
                'fecha' => Carbon::now()->addDays(rand(1, 30))->format('Y-m-d H:i:s'), // Fecha aleatoria en los próximos 30 días
                'user_id' => 1,  // Asumiendo que tienes al menos 5 usuarios, asignamos aleatoriamente un ID de usuario
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
