<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Permiso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permiso>
 */
class PermisoFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre' => fake()->word,
            'slug' => fake()->word,
    ];
    }
}
