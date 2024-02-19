<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'contact_name' => $this->faker->name(),
            'contact_email' =>  $this->faker->email(),
            'contact_phone_number' => $this->faker->e164PhoneNumber(),
            'company_name' => $this->faker->company(),
            'company_address' => $this->faker->streetAddress(),
            'company_city' => $this->faker->city(),
            'company_zip' => $this->faker->postCode(),
            'company_vat' => $this->faker->numberBetween(1000,100000)
        ];
    }
}
