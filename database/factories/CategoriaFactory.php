<?php

namespace Database\Factories;

use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{

    protected $categoria = Categoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
            'estado' => true,
            'image' => '/storage/' . $this->faker->image('public/storage', 600, 480, null, false),
        ];
    }
}
