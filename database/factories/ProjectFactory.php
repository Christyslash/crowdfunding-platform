<?php

namespace Database\Factories;

use App\Enums\ProjectStatusEnum;
use App\Models\ProjectCategory;
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
        return [
            'user_id' => 0, // will raise an error if not set properly in seeder
            'project_category_id' => $this->faker->randomElement(ProjectCategory::all('id')->pluck('id')->toArray()),
            'slug' => $this->faker->unique()->slug(),
            'title' => $this->faker->sentence(),
            'cover_image' => $this->faker->imageUrl(),
            'cover_video' => 'https://www.youtube.com/watch?v=9-RCNln4-Kw',
            'description' => $this->faker->paragraph(),
            'details' => $this->faker->randomHtml(),
            'jackpot' => $this->faker->randomFloat(2, 10000, 100000),
            'status' => $this->faker->randomElement(ProjectStatusEnum::values()),
        ];
    }
}
