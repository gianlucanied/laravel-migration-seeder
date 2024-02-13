<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> sentence(3),
            'stazione_di_partenza' => fake()-> sentence(5),
            'stazione_di_arrivo' => fake() -> sentence(5),
            'orario_partenza' => fake() -> randomFloat(2, 0, 24),
            'orario_arrivo' => fake() -> randomFloat(2, 0, 24),
            'codice_treno' => fake() -> randomFloat(0, 100, 1000),
            'numero_carrozze'=> fake() -> randomFloat(0, 4, 10),
            'in_orario'=> fake() -> boolean(),
            'cancellato'=> fake() -> boolean()
        ];
    }
}
