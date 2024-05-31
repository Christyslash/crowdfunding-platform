<?php

namespace Database\Factories;

use App\Enums\PayoutMethodEnum;
use App\Enums\PayoutStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payout>
 */
class PayoutFactory extends Factory
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
            'project_id' => 0, // will raise an error if not set properly in seeder
            'amount' => $this->faker->randomFloat(2, 10000, 100000),
            'note' => $this->faker->text(),
            'method' => PayoutMethodEnum::BANK,
            'external_id' => $this->faker->uuid(),
            'external_status' => $this->faker->word(),
            'status' => $this->faker->randomElement(PayoutStatusEnum::values()),
            'metadata' => null,
        ];
    }
}
