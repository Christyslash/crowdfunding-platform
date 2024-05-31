<?php

namespace Database\Factories;

use App\Enums\ProjectCommentStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectComment>
 */
class ProjectCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_contribution_id' => 0, // will raise an error if not properly set in seeder
            'content' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(ProjectCommentStatusEnum::values())
        ];
    }
}
