<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => $this->faker->word(2),
            'category' => $this->faker->randomElement(['Insurance', 'Sacco', 'Lender', 'Bank', 'Credit']),
            'email' => $this->faker->companyEmail(),
            'telephone' => $this->faker->phoneNumber(),
            'mobile' => $this->faker->phoneNumber(),
            'location' => $this->faker->city(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
