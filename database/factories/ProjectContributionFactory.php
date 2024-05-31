<?php

namespace Database\Factories;

use App\Enums\ProjectContributionStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectContribution>
 */
class ProjectContributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => 0, // will raise an error if not set properly in seeder
            'amount' => $this->faker->randomFloat(2, 10000, 100000),
            'status' => $this->faker->randomElement(ProjectContributionStatusEnum::values()),
        ];
    }
}
