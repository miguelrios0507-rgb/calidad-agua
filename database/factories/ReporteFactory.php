<?php

namespace Database\Factories;

use App\Models\Reporte;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends Factory<Reporte>
 */
class ReporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'descripcion' => fake()->sentence(),
            'ubicacion' => fake()->address(),
            'fecha_inicio' => fake()->date(),
            'folio' => fake()->unique()->numerify('??-#####'),
        ];
    }
}
