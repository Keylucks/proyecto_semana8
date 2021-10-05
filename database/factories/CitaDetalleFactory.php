<?php

namespace Database\Factories;

use App\Models\CitaDetalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaDetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CitaDetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cita' => $this->faker->word
        ];
    }
}
