<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['open', 'in progress', 'blocked', 'cancelled', 'completed']);

        return [
            'title' => $this->faker->words(3,true),
            'description'=>$this->faker->paragraph(),
            'user_id' => User::factory(),
            'client_id' => Client::factory(),
            'deadline' => $this->faker->dateTimeThisDecade(),
            'status' => $status
        ];
    }
}
