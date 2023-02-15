<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Typology>
 */
class TypologyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'code' => fake() -> regexify('[A-Z0-9]{5}'),
            'name' => fake() -> words(rand(1, 3), true),
            'digital' => fake() -> boolean(),
        ];
    }
}
