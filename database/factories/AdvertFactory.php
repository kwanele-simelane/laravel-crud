<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advert>
 */
class AdvertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // seed dummy data
            'advert_name' => $this->faker->word(),
            'web_url' => $this->faker->url(),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
