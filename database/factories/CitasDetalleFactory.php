<?php

namespace Database\Factories;

use App\Models\CitasDetalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasDetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CitasDetalle::class;

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
